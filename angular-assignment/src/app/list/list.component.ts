import { Component, OnInit } from '@angular/core';
import { Player } from '../../player';
import { PlayerService } from '../../player.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {

  players: Player[];
  error = '';
  success = '';

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
        this.error = err;
      }
    );
  }

}
