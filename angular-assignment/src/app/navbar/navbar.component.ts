import { Component, OnInit } from '@angular/core';
import { Player } from '../../player';
import { PlayerService } from '../../player.service';
import { Logininfo } from './logininfo';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  players: Player[];
  userid = ""; 
  loggedin = false;
  loginModel = new Logininfo('', '');
  error = "";
  
  constructor(private playerService: PlayerService) {
  }

  ngOnInit() {
    this.getPlayers();
  }
        
  getPlayers(): void {
    this.playerService.getAll().subscribe(
      (res: Player[]) => {
        this.players = res;
      },
      (err) => {
      }
    );
  }

  verify(): boolean {
    for(let player of this.players){
      if(player['PlayerID'] == this.loginModel.id){
        if(player['Password'] == this.loginModel.password){
          this.userid =  player['PlayerID'];
          this.error = "";
          this.loggedin = true;
          return true;
        }
      }
    }
    this.userid = "";
    this.loggedin = false;
    this.error = "login failed!";
    return false;
  }

  logout(): void {
    this.userid = "";
    this.loggedin = false;
  }

  get logged() {
    return this.loggedin;
  }
}
