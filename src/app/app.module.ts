import { BrowserModule } from '@angular/platform-browser';
import { NgModule} from '@angular/core';
import { RouterModule, Routes} from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { StoryComponent } from './story/story.component';
import { StoryInternalComponent } from './story-internal/story-internal.component';
import { NavComponent } from './nav/nav.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import {MatToolbarModule} from '@angular/material/toolbar';
import {MatButtonModule} from '@angular/material/button';
import {MatIconModule} from '@angular/material/icon';
import { ShortsComponent } from './shorts/shorts.component';
import { AboutComponent } from './about/about.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { CarouselModule } from 'ngx-owl-carousel-o';
import { ArtComponent } from './art/art.component';
import { FormComponent } from './form/form.component';
import { ShortsInternalComponent } from './shorts-internal/shorts-internal.component';

import {FormsModule} from '@angular/forms';
import{HttpClientModule} from '@angular/common/http';
// import { HttpHeaders } from '@angular/common/http';

// let header = new HttpHeaders();
// header.set('Access-Control-Allow-Origin', '*');

const appRoutes:Routes=[
  {path:'', component:HeaderComponent},
  {path:'story', component:StoryComponent},
  {path:'story', component:StoryComponent},
  {path:'story-internal', component:StoryInternalComponent},
  {path:'shorts', component:ShortsComponent},
  {path:'about', component:AboutComponent},
  {path:'art', component:ArtComponent},
  {path:'form', component:FormComponent},
  {path:'shorts-internal', component:ShortsInternalComponent},
]

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    StoryComponent,
    StoryInternalComponent,
    NavComponent,
    ShortsComponent,
    AboutComponent,
    ArtComponent,
    FormComponent,
    ShortsInternalComponent,
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatToolbarModule,
    MatButtonModule,
    MatIconModule,
    RouterModule.forRoot(appRoutes),
    NgbModule,
    CarouselModule,
    HttpClientModule,
    FormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
