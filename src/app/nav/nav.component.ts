import { Component, OnInit } from '@angular/core';
import *  as $ from "jquery";
@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.css']
})
export class NavComponent implements OnInit {
   
  
  constructor() { }

  ngOnInit(): void {
    /*---search bar activation---*/
    $('.search_bar a').on('click', function(){
      $('.dropdown_search').addClass('active')
  });

  
  
  $('.search_close_btn').on('click', function(){
      $('.dropdown_search').removeClass('active')
  });
  
  /*---setting activation---*/
  $('.setting_container a').on('click', function(){
    $('.setting_wrapper').addClass('active')
});

$('.setting_close_btn').on('click', function(){
    $('.setting_wrapper').removeClass('active')
});

$('.canvas_open navigate_icon navi_icon a').on('click', function(){
  $('.Offcanvas_menu_wrapper').addClass('active')
});

// $('.setting_close_btn').on('click', function(){
//   $('.setting_wrapper').removeClass('active')
// });



/*---Off Canvas Menu---*/var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
        $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');
        
        $offcanvasNavSubMenu.slideUp();
        
       




  }
}
