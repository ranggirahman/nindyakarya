<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
	<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="theme-color" content=""/>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=base_url();?>" />
    <meta property="og:site_name" content="Nindya Karya" />
    <meta property="og:title" content="Nindya Karya" />
    <meta name="description" content="Nindya Karya Test Site">
    <link rel="canonical" href="<?=base_url();?>"/>
	<title><?php echo isset($title)?$title:'Nindya Karya';?></title>

	<!-- Icon -->
	<link href="<?=base_url();?>assets/img/favicon.ico" rel="icon" type="image/x-icon" />

	<!-- Css (Global) -->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/materialicons/material-icons.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/modification.css">
    <style type="text/css">
        .btn-header:focus {
            background: #F7F7F7;
            box-shadow: none;
            border: solid 1px #DFDFDF;
            border-radius: 4px 4px 0px 0px !important;
        }
    </style>

	<!-- Js (Global) -->
    <script src="<?=base_url();?>assets/jquery/jquery.js"></script>
    <script src="<?=base_url();?>assets/bootstrap/js/popper.js"></script>
    <script src="<?=base_url();?>assets/bootstrap/js/bootstrap.js"></script>

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white justify-content-between shadow-sm py-1" style="box-shadow: 0px 0px 1px 0px;">
        <div class="container-fluid justify-content-between d-flex user-disabled">
            <div class="d-flex">
                <a href="" class="bg-transparent text-white d-flex mr-lg-4" role="button"><img class="my-auto mr-2" style="max-height: 28px;" src="<?= base_url(); ?>assets/img/logo-color.png"></a>
                <div class="d-flex" style="margin-bottom: -13px;">
                    <a href="<?=base_url();?>dashboard" class="d-flex <?php if($title == 'Dashboard'){ echo 'active-nk border-bottom border-nk';}else{ echo 'text-muted border-bottom border-white'; } ?> pb-2 px-3 mr-2 mr-lg-3" style="border-width: thick !important;"><i class="material-icons my-auto mr-lg-2" style="opacity: 0.5;">donut_small</i><div class="font-weight-light d-none d-sm-block" style="font-size: 20px;">Dashboard</div></a>
                    <a href="<?=base_url();?>report" class="d-flex <?php if($title == 'Report'){ echo 'active-nk border-bottom border-nk';}else{ echo 'text-muted border-bottom border-white'; } ?> pb-2 px-3 px-lg-4" style="border-width: thick !important;"><i class="material-icons my-auto mr-lg-2" style="opacity: 0.5;">text_snippet</i><div class="font-weight-light d-none d-sm-block" style="font-size: 20px;">Report</div></a>
                </div>
            </div>
            <div>
                <div class="btn-group">
                    <button class="btn btn-white btn-header rounded d-flex my-auto p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons text-muted" style="font-size: 28px; margin-top: 1px; margin-bottom: -1px; opacity: 0.5">notifications</i>
                        <span class="badge badge-danger" style="font-size: 8px; position: absolute; top: 8px; right: 5px;">2</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right border-0 py-0" style="margin-top: -1px;">
                        <div class="card shadow-sm" style="width: 280px; border-radius: 4px 0px 4px 4px !important">
                            <div class="card-header text-muted py-1 px-2">
                                <div class="small my-auto">Notification</div>
                            </div>
                            <div class="card-body bg-transparent p-0">
                                <a href="" class="border rounded text-dark d-flex p-2 m-1">
                                    <div class="mr-2 my-auto" style="position: relative;"><i class="material-icons text-muted">assignment_late</i><span class="text-danger" style="font-size: 40px; position: absolute; top: -30px; right: -4px; -webkit-text-stroke: 2px white;">•</span></div>
                                    <div>
                                        <div style="font-size: 13px;">Report Region 4 need action</div>
                                        <div class="text-muted" style="font-size: 10px;">20h ago</div>
                                    </div>
                                </a>
                                <a href="" class="border rounded text-dark d-flex p-2 m-1">
                                    <div class="mr-2 my-auto" style="position: relative;"><i class="material-icons text-muted">assignment_returned</i><span class="text-danger" style="font-size: 40px; position: absolute; top: -30px; right: -4px; -webkit-text-stroke: 2px white;">•</span></div>
                                    <div>
                                        <div style="font-size: 13px;">Report Region 1 Returned</div>
                                        <div class="text-muted" style="font-size: 10px;">1d ago</div>
                                    </div>
                                </a>
                                <a href="" class="border rounded text-muted d-flex p-2 m-1">
                                    <div class="mr-2 my-auto"><i class="material-icons text-muted" style="opacity: 0.6;">assignment_turned_in</i></div>
                                    <div>
                                        <div style="font-size: 13px;">Report Region 3 Approved</div>
                                        <div class="text-muted" style="font-size: 10px;">20d ago</div>
                                    </div>
                                </a>
                                <a href="" class="border rounded text-muted d-flex p-2 m-1">
                                    <div class="mr-2 my-auto"><i class="material-icons text-muted" style="opacity: 0.6;">assignment_turned_in</i></div>
                                    <div>
                                        <div style="font-size: 13px;">Report Region 5 Approved</div>
                                        <div class="text-muted" style="font-size: 10px;">30d ago</div>
                                    </div>
                                </a>
                                <a href="" class="border rounded text-muted d-flex p-2 m-1">
                                    <div class="mr-2 my-auto"><i class="material-icons text-muted" style="opacity: 0.6;">assignment_turned_in</i></div>
                                    <div>
                                        <div style="font-size: 13px;">Production Region 2 Approved</div>
                                        <div class="text-muted" style="font-size: 10px;">1y ago</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-white btn-header rounded d-flex p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="my_photo" class="rounded-circle border mr-lg-2" style="object-fit: cover;height: 30px;width: 30px;" src="<?= base_url(); ?>assets/img/profile.jpg"><div class="font-weight-light text-muted my-auto"><span class="d-none d-sm-block">Ranggi Rahman</span></div>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right border-0 py-0" style="margin-top: -2px;">
                        <div class="card shadow-sm" style="width: 168px; border-radius: 0px 0px 4px 4px !important">
                            <div class="card-body bg-transparent py-2">
                                <a data-toggle="modal" data-target="#mHelp" class="text-muted d-block cur-pointer py-1" style="font-size: 16px;"><i class="material-icons text-muted mr-2" style="font-size: 16px;">help</i>Help</a>
                                <a data-toggle="modal" data-target="#mSignO" class="text-muted d-block cur-pointer py-1" style="font-size: 16px;"><i class="material-icons text-muted mr-2" style="font-size: 16px;">exit_to_app</i>Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </nav>