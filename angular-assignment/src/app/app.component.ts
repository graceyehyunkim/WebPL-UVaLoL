import { Component } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'UvaLoL LCS';
  constructor(private http: HttpClient) {
  }
  sendPost(data: any): Observable<any> {
    return this.http.post("http://localhost/example/example.php", data, {responseType: 'text'});
    console.log(data);
  }
  subPost(data: any) {
    this.sendPost(data).subscribe(
      res => {
        console.log(res);
      }
    )
  }
}
