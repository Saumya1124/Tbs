import { Component } from '@angular/core';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  myScriptElement:HTMLScriptElement;
  title = 'story';
  constructor(){
    this.myScriptElement= document.createElement("script");
    this.myScriptElement.src="../../assets/js/header.js";
    document.body.appendChild(this.myScriptElement);
  }

 
}
