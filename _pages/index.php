<!doctype html>
<!--
   * Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
   * @version 1.0.0-beta9
   * @link https://tabler.io
   * Copyright 2018-2022 The Tabler Authors
   * Copyright 2018-2022 codecalm.net Paweł Kuna
   * Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
   -->
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <title>Bagyo - Your Daily Weather Forecast</title>
      <!-- CSS files -->
      <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
      <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
      <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
      <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
      <link href="./dist/css/demo.min.css" rel="stylesheet"/>
      <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet"/>
      <style type="text/css">
         .c_img {
         object-fit: cover;
         height: 120px !important;
         width: 100%;
         }
         .form-imagecheck-image {
         opacity: 1 !important;
         }
      </style>
   </head>
   <body >
      <div class="page">
         <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
               <span class="navbar-toggler-icon"></span>
               </button>
               <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                  <a href=".">
                  <img src="../source/bagyo_logo.jpg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                  </a>
               </h1>
               <div class="navbar-nav flex-row order-md-last">
                  <div class="d-none d-md-flex">
                  </div>
               </div>
            </div>
         </header>
         <div class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
               <div class="navbar navbar-light">
                  <div class="container-xl">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="#" >
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                 </svg>
                              </span>
                              <span class="nav-link-title">
                              Home
                              </span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a id="aSubscribe" class="nav-link" href="#" >
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                 </svg>
                              </span>
                              <span class="nav-link-title">
                              Subscribe
                              </span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a id="aAdmin" class="nav-link" href="#" >
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <line x1="19" y1="7" x2="19" y2="10"></line>
                                    <line x1="19" y1="14" x2="19" y2="14.01"></line>
                                 </svg>
                              </span>
                              <span class="nav-link-title">
                              Administrator
                              </span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-large">
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                 </svg>
                              </span>
                              <span class="nav-link-title">
                              About Us
                              </span>
                           </a>
                        </li>
                     </ul>
                     <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                        <form action="." method="get">
                           <div class="input-icon">
                              <span class="input-icon-addon">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="10" cy="10" r="7" />
                                    <line x1="21" y1="21" x2="15" y2="15" />
                                 </svg>
                              </span>
                              <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="page-wrapper">
            <div class="page-body">
               <div class="container-xl">
                  <div class="row">
                     <div class="col-md-6 col-xl-9">
                        <div class="page-header d-print-none">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h2 class="page-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-rain" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                       <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path>
                                       <path d="M11 13v2m0 3v2m4 -5v2m0 3v2"></path>
                                    </svg>
                                    Weather Forecast</a>
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                        <div class="card card-sm">
                           <div class="card-body">
                              <div class="row align-items-center">
                                 <div class="col-auto">
                                    <span class="bg-red text-white avatar">
                                       <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                       <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <circle cx="12" cy="7" r="4"></circle>
                                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="col">
                                    <?php
                                       include '../_php/members.php';
                                       ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row row-cards">
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_0" class="card-title">Location</h3>
                              <img id="img_0" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_0">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_0">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_1" class="card-title">Location</h3>
                              <img id="img_1" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_1">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_1">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_2" class="card-title">Location</h3>
                              <img id="img_2" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_2">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_2">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_3" class="card-title">Location</h3>
                              <img id="img_3" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_3">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_3">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_4" class="card-title">Location</h3>
                              <img id="img_4" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_4">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_4">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_5" class="card-title">Location</h3>
                              <img id="img_5" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_5">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_5">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row row-cards">
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_6" class="card-title">Location</h3>
                              <img id="img_6" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_6">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_6">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_7" class="card-title">Location</h3>
                              <img id="img_7" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_7">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_7">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_8" class="card-title">Location</h3>
                              <img id="img_8" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_8">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_8">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-2">
                        <div class="card">
                           <div class="card-header card-header-light">
                              <h3 id="title_9" class="card-title">Location</h3>
                              <img id="img_9" src="http://openweathermap.org/img/wn/10d@2x.png" style="height:100px; width:100%;">
                           </div>
                           <div class="card-body">
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thermometer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z"></path>
                                    <path d="M16 7l-1.5 -1.5"></path>
                                    <path d="M13 10l-1.5 -1.5"></path>
                                    <path d="M10 13l-1.5 -1.5"></path>
                                    <path d="M7 17l-3 3"></path>
                                 </svg>
                                 <span id="spDeg_9">Fetching Temp..</span>
                              </td>
                              <br>
                              <td class="text-nowrap text-muted">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-12"></path>
                                 </svg>
                                 <span id="spDesc_9">Fetching Weather..</span>
                              </td>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="card" style="height: 206px;">
                           <div class="row row-0">
                              <div class="col-3 order-md-last">
                                 <img src="./static/photos/de6d0fd1feebb6a2.jpg" class="w-100 h-100 object-cover" alt="Card side image" style="height: 204px !important; object-fit: cover!important;">
                              </div>
                              <div class="col">
                                 <div class="card-body">
                                    <h3 class="card-title">How to subscribe via SMS?</h3>
                                    <p class="text-muted">
                                       Just type in BAGYOBALITA&#60;space&#62;&#60;NAME OF CITY&#62; and send to 09391449034
                                       <br>
                                       <br>
                                       The list of cities you can subscribe are displayed in the weather forecast
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row row-cards">
                     <div class="col-md-4 col-lg-8">
                        <div class="card">
                           <div class="card-body">
                              <h3 class="card-title">Temperature Report</h3>
                              <div class="row">
                                 <div class="col-md-9 col-sm-12">
                                 </div>
                                 <div class="col-md-3 col-sm-12">
                                    <div class="col">
                                       <select id="cmbCities" class="form-select">
                                       <?php
                                          include '../_php/cities.php';
                                          ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col">
                                       <div class="chart" style="min-height: 288px;">
                                          <canvas id="tempChart" style="width:100%;"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-4">
                        <div class="card" style="height: 511px;">
                           <div class="card-body">
                              <h3 class="card-title">Images</h3>
                              <div class="row">
                                 <div class="col-6 col-sm-6">
                                    <span>
                                    <img src="https://miro.medium.com/max/1400/1*uqjBtCTd86n7l985SBA9nA.jpeg" class="form-imagecheck-image c_img">
                                    </span>
                                 </div>
                                 <div class="col-6 col-sm-6">
                                    <span>
                                    <img src="https://oceanservice.noaa.gov/facts/elnino.jpg" class="form-imagecheck-image c_img">
                                    </span>
                                 </div>
                              </div>
                              <br>
                              <div class="row">
                                 <div class="col-6 col-sm-6">
                                    <span>
                                    <img src="https://iowaagliteracy.files.wordpress.com/2019/09/climate-map.jpg?w=676" class="form-imagecheck-image c_img">
                                    </span>
                                 </div>
                                 <div class="col-6 col-sm-6">
                                    <span>
                                    <img src="https://oxfordbusinessgroup.com/sites/default/files/Philippines%20banner_1.png" class="form-imagecheck-image c_img">
                                    </span>
                                 </div>
                              </div>
                              <br>
                              <div class="row">
                                 <div class="col-6 col-sm-6">
                                    <span>
                                    <img src="https://www.agriculture.com.ph/wp-content/uploads/2021/05/1-Michael-Caballes-the-owner-of-Bukid-Amara-and-GrabGrow-acquired-the-seeds-from-a-Dutch-seed-company.-744x558.jpg" class="form-imagecheck-image c_img">
                                    </span>
                                 </div>
                                 <div class="col-6 col-sm-6">
                                    <span>
                                    <img src="https://media.interaksyon.com/wp-content/uploads/2018/08/Famers-working-in-a-field.jpg" class="form-imagecheck-image c_img">
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <?php
                     include '../_php/videos.php';
                  ?>
                  <br>
                  <div class="row row-cards">
                     <div class="col-md-4 col-lg-12">
                        <div class="card">
                           <div class="card-body">
                              <h3 class="card-title">Articles</h3>
                              <div class="row">
                                 <div class="col-md-12 col-lg-12">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">
                                          Filipino farmers - a dying breed?
                                        </button>
                                      </h2>
                                      <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                          “The average age of the Filipino farmer is 57. Assuming an average life span of 70, we might reach a critical [shortage] of farmers in just 15 years,” said Asterio Saliot, director of the Department of Agriculture - Agricultural Training Institute (DA-ATI).
                                          “The average level of education of a farmer is grade five only,” he added.
                                          According to Saliot, farmers’ age and limited education make them less receptive to new farming technologies that can boost yields in the face of growing losses from volatile weather.
                                          Weak government policies and programmes, an excessive reliance on agricultural imports, and corruption, have taken their toll on the agricultural sector, say experts.
                                          According to the 2012 Bureau of Agricultural Statistics, the agricultural sector employs an estimated 12 million people, making up 33 percent of the country’s labour force. About 70 percent of the rural poor are farmers and fishermen.
                                          <a href="https://www.thenewhumanitarian.org/feature/2013/02/26/filipino-farmers-dying-breed">Read more...</a>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-lg-12">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true">
                                          Smart agri tech available for small-scale farmers
                                        </button>
                                      </h2>
                                      <div id="collapse-2" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                          MANILA – Small-scale farmers can adopt affordable technologies to get them aboard smart agriculture initiatives while governments continuously invest also in the basics to speed up smart agricultural transformation (SAT), an expert said.
                                          Philippine Institute for Development Studies (PIDS) Research Fellow Roehlano Briones said smart agriculture covers a wide range of technologies, some of which could be handled by small farmers.
                                          “Putting up a sensor, simple sensor that will communicate with your mobile phone and the mobile phone is a simple inexpensive smartphone. That one has a greater promise of early adoption,” he said during the recent Asian Productivity Organization’s (APO) productivity talk.
                                          The APO is an intergovernmental organization established in 1961 to increase productivity in the Asia-Pacific region through cooperation, according to its website.
                                          <a href="https://www.pna.gov.ph/articles/1166120">Read more...</a>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-lg-12">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true">
                                          Transforming Philippine Agriculture: During Covid-19 and Beyond (June 2020)
                                        </button>
                                      </h2>
                                      <div id="collapse-3" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                          MANILA, September 9, 2020--- Transforming Philippine agriculture into a dynamic, high-growth sector is essential for the country to speed up recovery, poverty reduction and inclusive growth, according to the latest report released by the World Bank.
                                          Titled "*Transforming Philippine Agriculture During Covid-19 and Beyond*," the report says that transforming the country's farming and food systems is even more important during the Covid-19 pandemic to ensure strong food value chains, affordable and nutritious food, and a vibrant rural economy.
                                          <a href="https://reliefweb.int/report/philippines/transforming-philippine-agriculture-during-covid-19-and-beyond-june-2020">Read more...</a>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-lg-12">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true">
                                          4 Ways Farmers Can Adapt to Climate Change and Generate Income
                                        </button>
                                      </h2>
                                      <div id="collapse-4" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                             Climate change poses a real threat to farmers around the world. Agriculture is highly dependent on good weather, including high and low temperatures, rainfall, wind intensity, and many other variables. Estimates show that climate change might reduce global agriculture productivity by 17% by 2050.
                                             For countries highly dependent on agricultural exports, like Brazil, this poses a real problem. Research shows that climate change-driven changes in rainfall patterns could severely reduce the harvest of healthy soybeans, one of Brazil's biggest export commodities. Studies show that temperature increases could reduce by 95% the area suitable for producing coffee, an important export commodity, in three Brazilian states.
                                          <a href="https://www.wri.org/insights/4-ways-farmers-can-adapt-climate-change-and-generate-income">Read more...</a>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-lg-12">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true">
                                          How to Predict the Weather Without a Forecast
                                        </button>
                                      </h2>
                                      <div id="collapse-5" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                          Generally, most of us rely on forecasts to tell us what kind of weather to expect. However, it is possible to predict the weather using your skills of observation and knowledge of weather patterns. Not only can predicting the weather be a fun hobby, it can also be a useful skill if you enjoy outdoor activities, such as hiking or camping. By learning what to look for, you can predict the weather without a forecast or technological device
                                          <a href="https://www.wikihow.com/Predict-the-Weather-Without-a-Forecast">Read more...</a>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
               <div class="container-xl">
                  <div class="row text-center align-items-center flex-row-reverse">
                     <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                        </ul>
                     </div>
                     <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                           <li class="list-inline-item">
                              Copyright &copy; 2022
                              All rights reserved.
                           </li>
                           <li class="list-inline-item">
                              <a href="./changelog.html" class="link-secondary" rel="noopener">
                              v1.0.0-beta9
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <div class="modal modal-blur fade" id="modal-simple" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Subscribe and get Notified</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-12 col-sm-12">
                        <div class="col">
                           <select id="cmbSelectCities" class="form-select">
                              <option value="" selected disabled>Please select a City</option>
                              <?php
                                 include '../_php/cities.php';
                                 ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col">
                           <label class="form-label">Name (Optional)</label>
                           <input id="txtFullName" type="text" class="form-control" name="example-text-input" autocomplete="off">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col">
                           <label class="form-label">Mobile Number</label>
                           <input id="txtMobile" maxlength="11" type="text" class="form-control" name="example-text-input" placeholder="Format : (09XXXXXXXXX)" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" autocomplete="off">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                  <button id="btnProceed" type="button" class="btn btn-primary">Proceed</button>
               </div>
            </div>
         </div>
      </div>
      <div class="modal modal-blur fade" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">About the Team</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row row-cards">
                     <div class="col-md-6 col-lg-6">
                        <div class="card">
                           <div class="card-body p-4 text-center">
                              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(../source/joy.jpg)"></span>
                              <h3 class="m-0 mb-1"><a href="#">Reodel Joy H. Pabelada	</a></h3>
                              <div class="text-muted">UI/UX</div>
                              <div class="mt-3">
                                 <span class="badge bg-purple-lt">Student</span>
                              </div>
                           </div>
                           <div class="d-flex">
                              <a href="https://mail.google.com/mail/u/0/?fs=1&to=reodeljoypabelada@gmail.com&tf=cm" class="card-btn">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <polyline points="3 7 12 13 21 7"></polyline>
                                 </svg>
                                 Email
                              </a>
                              <a href="#" class="card-btn" onclick="alert('Mobile number is 09452404423')">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                 </svg>
                                 Call
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="card">
                           <div class="card-body p-4 text-center">
                              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(../source/mark.jpg)"></span>
                              <h3 class="m-0 mb-1"><a href="#">Mark Russel S. Realista</a></h3>
                              <div class="text-muted">Back End</div>
                              <div class="mt-3">
                                 <span class="badge bg-purple-lt">Student</span>
                              </div>
                           </div>
                           <div class="d-flex">
                              <a href="https://mail.google.com/mail/u/0/?fs=1&to=realiatamaaku54@gmail.com&tf=cm" class="card-btn">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <polyline points="3 7 12 13 21 7"></polyline>
                                 </svg>
                                 Email
                              </a>
                              <a href="#" class="card-btn" onclick="alert('Mobile number is 09391449034')">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                 </svg>
                                 Call
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row row-cards">
                     <div class="col-md-6 col-lg-6">
                        <div class="card">
                           <div class="card-body p-4 text-center">
                              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(../source/cedrick.jpg)"></span>
                              <h3 class="m-0 mb-1"><a href="#">Cedrick James Buri</a></h3>
                              <div class="text-muted">Dev Lead</div>
                              <div class="mt-3">
                                 <span class="badge bg-purple-lt">Student</span>
                              </div>
                           </div>
                           <div class="d-flex">
                              <a href="https://mail.google.com/mail/u/0/?fs=1&to=cedrick.buri@gmail.com&tf=cm" class="card-btn">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <polyline points="3 7 12 13 21 7"></polyline>
                                 </svg>
                                 Email
                              </a>
                              <a href="#" class="card-btn" onclick="alert('Mobile number is 09777665502')">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                 </svg>
                                 Call
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="card">
                           <div class="card-body p-4 text-center">
                              <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(../source/xtian.jpg)"></span>
                              <h3 class="m-0 mb-1"><a href="#">Christian Agassi G. Pasion</a></h3>
                              <div class="text-muted">Front End</div>
                              <div class="mt-3">
                                 <span class="badge bg-purple-lt">Student</span>
                              </div>
                           </div>
                           <div class="d-flex">
                              <a href="https://mail.google.com/mail/u/0/?fs=1&to=agassi1738@gmail.com&tf=cm" class="card-btn">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <polyline points="3 7 12 13 21 7"></polyline>
                                 </svg>
                                 Email
                              </a>
                              <a href="#" class="card-btn" onclick="alert('Mobile number is 09494904185')">
                                 <!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                 </svg>
                                 Call
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal modal-blur fade" id="mdAdmin" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Administrator Settings</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div>
                  <div class="card" style="border-radius: 0px; border: 1px solid #fff;">
                     <br>
                     <ul class="nav nav-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                           <a href="#tabs-home-9" class="nav-link active" data-bs-toggle="tab">
                              <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4"></path>
                                 <circle cx="18" cy="18" r="4"></circle>
                                 <path d="M15 3v4"></path>
                                 <path d="M7 3v4"></path>
                                 <path d="M3 11h16"></path>
                                 <path d="M18 16.496v1.504l1 1"></path>
                              </svg>
                              &nbsp;
                              Scheduler
                           </a>
                        </li>
                        <!--<li class="nav-item">
                           <a href="#tabs-profile-9" class="nav-link" data-bs-toggle="tab">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                              </svg>
                              Admin Account
                           </a>
                        </li>-->
                        <li class="nav-item">
                           <a href="#tabs-subscribers-9" class="nav-link" data-bs-toggle="tab">
                              <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"></path>
                              </svg>
                              &nbsp;
                              Subscribers
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#tabs-video-9" class="nav-link" data-bs-toggle="tab">
                              <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <rect x="3" y="5" width="18" height="14" rx="4"></rect>
                                 <path d="M10 9l5 3l-5 3z"></path>
                              </svg>
                              &nbsp;
                              Video Upload
                           </a>
                        </li>
                     </ul>
                     <div class="card-body">
                        <div class="tab-content">
                           <div class="tab-pane show active" id="tabs-home-9">
                              <div class="row">
                                 <div class="col-md-3 col-sm-12">
                                    <div class="col">
                                       <label class="form-label">Select Time</label>
                                       <input id="txtTime" type="time" class="form-control" name="example-text-input" autocomplete="off">
                                    </div>
                                    <br>
                                    <div class="col">
                                       <button id="btnAddSched" type="button" class="btn btn-primary" style="width:100%">Add Schedule</button>
                                    </div>
                                 </div>
                                 <div class="col-md-9 col-sm-12">
                                    <div class="col">
                                       <label class="form-label">Schedules</label>
                                       <table id="tblSchedule" class="table card-table table-vcenter text-nowrap datatable">
                                          <thead>
                                             <tr>
                                                <th>Time</th>
                                                <th>Created By</th>
                                                <th>Date Created</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody></tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="tabs-subscribers-9">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col">
                                       <input id="txtFindSub" type="text" class="form-control" name="example-text-input" autocomplete="off">
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="row">
                                 <div class="col-md-12 col-sm-12">
                                    <div class="col">
                                       <table id="tblSubscribers" class="table card-table table-vcenter text-nowrap datatable">
                                          <thead>
                                             <tr>
                                                <th>City ID</th>
                                                <th>City Name</th>
                                                <th>Full Name</th>
                                                <th>Mobile Number</th>
                                                <th>Date Created</th>
                                                <th></th>
                                             </tr>
                                          </thead>
                                          <tbody></tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="tabs-video-9">
                              <div class="row">
                                 <div class="col-md-4 col-sm-12">
                                    <div class="col">
                                       <label class="form-label">City</label>
                                       <select id="cmbSelectCities2" class="form-select">
                                          <option value="" selected disabled>Please select a City</option>
                                          <?php
                                             include '../_php/cities.php';
                                             ?>
                                       </select>
                                    </div>
                                    <br>
                                    <div class="col">
                                       <label class="form-label">Youtube ID</label>
                                       <input id="txtLink" type="text" class="form-control" name="example-text-input" autocomplete="off" placeholder="Paste your ID here">
                                    </div>
                                    <br>
                                    <div class="col">
                                       <button id="btnAddLink" type="button" class="btn btn-primary" style="width:100%">Add Link</button>
                                    </div>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <div class="col" style="overflow-x: scroll;">
                                       <label class="form-label">Links</label>
                                       <table id="tblLinks" class="table card-table table-vcenter text-nowrap datatable">
                                          <thead>
                                             <tr>
                                                <th>City</th>
                                                <th>Youtube Video ID</th>
                                                <th></th>
                                             </tr>
                                          </thead>
                                          <tbody></tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="modal modal-blur fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Admin Login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col">
                           <a href="#">Forgot Password?</a>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col">
                           <label class="form-label">Username</label>
                           <input id="txtUsername" type="text" class="form-control" name="example-text-input" autocomplete="off">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col">
                           <label class="form-label">Password</label>
                           <input id="txtPassword" type="password" class="form-control" name="example-text-input" autocomplete="off">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                  <button id="btnLogin" type="button" class="btn btn-primary">Login Credentials</button>
               </div>
            </div>
         </div>
      </div>
      
      <!-- Libs JS -->
      <!-- ChartJS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
      <!-- Tabler Core -->
      <script src="./dist/js/tabler.min.js"></script>
      <script src="./dist/js/demo.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script src="../js/index.js?random=<?php echo rand(); ?>"></script>
   </body>
</html>