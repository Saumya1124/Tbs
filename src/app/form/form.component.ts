import { Component, OnInit } from '@angular/core';

import {HttpClient} from '@angular/common/http';


@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent implements OnInit {

  

  ngOnInit(): void {
    
  }

  // constructor(private http:HttpClient) {}

  // onSubmit(data:any)    
  // { 
  //   this.http.post(' http://127.0.0.1:5000/form/v1/post/data',data)
  //   .subscribe((result)=>{
  //     console.warn("result",result)
  //   })
  //   console.warn(data);
  

  //   }

}
