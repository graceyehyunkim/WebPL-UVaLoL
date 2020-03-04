import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { ListComponent } from './list/list.component';
import { DraftComponent } from './draft/draft.component';
import { NavbarComponent } from './navbar/navbar.component';


const routes: Routes = [
  { path: 'home', component: AppComponent },
  { path: 'draft', component: DraftComponent },
  { path: 'list', component: ListComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
