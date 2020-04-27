import { Injectable } from '@angular/core';

import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError } from 'rxjs/operators';

import { Player } from './player';

@Injectable({
    providedIn: 'root'
  })
  export class PlayerService {
  
    player = new Player(false, '', '', '', 0, '', '', '', '', '');
    players: Player[];
  
    constructor(private http: HttpClient) { }
  
    sendRequest(data: any): Observable<any> {
      // return this.http.post('http://localhost/cs4640/inclass11/ngphp-post.php', data, {responseType: 'text'});
      // return this.http.post('http://localhost/cs4640/inclass11/ngphp-post.php', data, {responseType: 'json'});
      return this.http.post('http://localhost/cs4640/ngphp-post.php', data);
    }
  
    sendOrder(data): Observable<Player> {
       return this.sendRequest(data);
    }

    getAll(): Observable<Player[]> {
        return this.http.get('http://localhost/cs4640/assignment4/getallplayers.php').pipe(
          map((res) => {
            this.players = res['data'];
            return this.players;
        }),
        catchError(this.handleError));
    }

    private handleError(error: HttpErrorResponse) {
        console.log(error);
        return throwError('Error! something went wrong.');
      }
  }
  