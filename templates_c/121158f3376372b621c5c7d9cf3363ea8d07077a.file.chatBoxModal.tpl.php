<?php /* Smarty version Smarty-3.1.12, created on 2018-01-03 14:25:13
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/main/chatBoxModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13388775605a41bc221fe450-69463893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121158f3376372b621c5c7d9cf3363ea8d07077a' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/main/chatBoxModal.tpl',
      1 => 1514895421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13388775605a41bc221fe450-69463893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc2220b6f4_27121083',
  'variables' => 
  array (
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc2220b6f4_27121083')) {function content_5a41bc2220b6f4_27121083($_smarty_tpl) {?><!-- Start Modal Chat box -->

<div class="chatBoxModal modal hide fade text-xs-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel16"><h4 class="card-title"><i class="icon-speech-bubble"></i> Chat</h4></h4>
            </div>
            <div class="modal-body">
                <div class="row" id="order_Append">

                    <div class="col-sm-12">
                        <div class="card-header" style="padding: 0rem">

                            <a href="#">
                                <span class="avatar avatar-online">
                                    <img src="https://test.lomixa.com/style/lomixa/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
                                    <i></i>
                                </span>
                            </a>
                            <span style="margin: 10px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['Name'];?>
</span>

                            <div class="row">
                                <div class="col-sm-6">

                                    <br>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div style="padding:1rem 1rem 0 0;">
                            <select class="selectBox" style="padding: 5px;width: 200px;">
                                <option value="1"><?php echo $_smarty_tpl->tpl_vars['var']->value['allOrders'];?>
</option>
                                <option value="2"><?php echo $_smarty_tpl->tpl_vars['var']->value['DrugsOrders'];?>
</option>
                                <option value="3"><?php echo $_smarty_tpl->tpl_vars['var']->value['AnalysisOrders'];?>
</option>
                                <option value="4"><?php echo $_smarty_tpl->tpl_vars['var']->value['AmbulanceOrders'];?>
</option>
                                <option value="5"><?php echo $_smarty_tpl->tpl_vars['var']->value['ExaminationOrders'];?>
</option>
                                <option value="6"><?php echo $_smarty_tpl->tpl_vars['var']->value['Consulting'];?>
</option>
                            </select>
                        </div>
                        <div id="isMobileDetect" class="form-group" style="margin-top: 1rem; display: none">
                            <!-- Social Buttons block sizes -->
                            <a id="detectMobile" href="#" class="btn btn-social mb-1 btn-block btn-adn"><span class="icon-shopping-cart"></span> <?php echo $_smarty_tpl->tpl_vars['var']->value['orderList'];?>
</a> 
                        </div>
                        <div style="padding: 1rem;">
                            <div id="order_list" class="scrollable content-wrap default-handlers scroll-example height-300 ps-container ps-theme-default ps-active-y" data-ps-id="10e932c0-e7cb-6156-8a5f-ba909daaba5b">

                                <div class="ps-scroll-left" style="left: 4px; bottom: 3px;">
                                    <div class="ps-scroll-left" tabindex="0" style="left: 4px; width: 0px;"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Chat Box -->

                    <div class="orderboxes order col-sm-7" id="chat" style="display: none">
                        <div style="padding: 10px 0 5px 0; margin-bottom: 30px;">

                            <h4 class="card-title col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['orderNum'];?>
</span> 474</h4> 
                            <h4 class="card-title col-sm-6">عيادة الدمرداش</h4>
                        </div>
                        <div class="card-block" style="padding: 1rem;">
                            <div class="scrollable default-handlers scroll-example height-300 ps-container ps-theme-default" data-ps-id="496474cd-668a-60a3-dada-7f2e5c7010f4">
                                <div class="media-list media-bordered">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img class="media-object rounded-circle" src="https://test.lomixa.com/style/lomixa/app-assets/images/portrait/small/avatar-s-1.png" alt="Generic placeholder image" style="width: 64px;height: 64px;">
                                        </a>
                                        <div class="media-body">

                                            <div class="media-heading">
                                                <strong class="primary-font">Cookie candy</strong> 
                                                <small class="pull-right text-muted" style="float: left"><i class="icon-clock3"></i>12 mins ago</small>
                                            </div>
                                            <p>
                                                Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie lemon drops chocolate cake donut croissant cotton candy.
                                            </p>
                                            <div class="media-notation">
                                                <a href="#">
                                                    <i class="icon-reply mr-0"></i> Reply
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit mr-0"></i> Edit
                                                </a>
                                                <a href="#">
                                                    <i class="icon-bin mr-0"></i> Delete
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body text-xs-right">

                                            <div class="media-heading">
                                                <strong class="primary-font">Pudding marshmallow</strong> 
                                                <small class="pull-right text-muted" style="float: right"><i class="icon-clock3"></i>13 mins ago</small>
                                            </div>
                                            <p>
                                                Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops brownie biscuit jelly-o biscuit gummies.
                                            </p>
                                            <div class="media-notation">
                                                <a href="#">
                                                    <i class="icon-reply mr-0"></i> Reply
                                                </a>
                                                <a href="#">
                                                    <i class="icon-edit mr-0"></i> Edit
                                                </a>
                                                <a href="#">
                                                    <i class="icon-bin mr-0"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                        <a class="media-right" href="#">
                                            <img class="media-object rounded-circle" src="https://test.lomixa.com/style/lomixa/app-assets/images/portrait/small/avatar-s-1.png" alt="Generic placeholder image" style="width: 64px;height: 64px;">
                                        </a>
                                    </div>
                                </div>



                                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: -8px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                            <div class="panel-footer" style="padding: 20px 0 0 0;">
                                <fieldset>
                                    <div class="input-group">
                                        <span class="input-group-btn" id="button-addon1">
                                            <button id="submit" class="btn btn-primary" type="button"><?php echo $_smarty_tpl->tpl_vars['var']->value['send'];?>
</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Type Your Message" aria-describedby="button-addon1">

                                        <!-- Start Chat Box pop Up -->


                                        <div class="btn-group gurdeepoushan input-group-btn" id="button-addon3">

                                            <button id="option" class="btn btn-primary bg-info border-info" data-toggle="dropdown" type="button" aria-expanded="false"><i class="icon-android-settings"></i></button>

                                            <div class="dropdown-menu arrow">
                                                <input type="file" id="filecount" multiple="multiple" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                                                <div class="bootstrap-filestyle input-group"><span class="group-span-filestyle " tabindex="0"><label for="filecount" class="dropdown-item "><i class="mr-1 icon-camera"></i> <span class="buttonText"><?php echo $_smarty_tpl->tpl_vars['var']->value['photo'];?>
</span></label></span></div>
                                                <button class="dropdown-item editOrder" data-toggle="modal" data-target="#edit-order" type="button"><i class="mr-1 icon-edit"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['EditOrder'];?>
</button>
                                                <button class="dropdown-item process_order" data-toggle="modal" data-target="#process_order_box" type="button"><i class="mr-1 icon-check2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['ProcessOrder'];?>
</button>
                                                <button class="dropdown-item" type="button"><i class="mr-1 icon-cross2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['CancelOrder'];?>
</button>

                                            </div>
                                        </div>
                                        <!-- End Chat Box Pop up -->
                                    </div>

                                </fieldset>
                            </div>

                        </div>
                    </div>

                    <!-- Chat Box -->

                    <!-- Order Display -->

                    <div class="orderboxes order_display col-sm-7" style="margin-right: -19px; display: none" id="newItem">

                        <div style="padding: 10px 0 5px 0; margin-bottom: 30px;">

                            <h4 class="card-title col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['orderNum'];?>
</span> <span class="order_number"></span></h4> 
                            <h4 class="card-title col-sm-6">عيادة الدمرداش</h4>
                        </div>

                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">

                            <div class="card-body collapse in" aria-expanded="true">
                                <div class="col-sm-12" style="padding: 0.5rem">
                                    <div class="col-sm-3 img">
                                        <img src="https://via.placeholder.com/125x125" class="img-thumbnail" alt="Thumbnail Image">
                                    </div>
                                    <div class="col-sm-3 img">
                                        <img src="https://via.placeholder.com/125x125" class="img-thumbnail" alt="Thumbnail Image">
                                    </div>
                                    <div class="col-sm-3 img">
                                        <img src="https://via.placeholder.com/125x125" class="img-thumbnail" alt="Thumbnail Image">
                                    </div>
                                    <div class="col-sm-3 img">
                                        <img src="https://via.placeholder.com/125x125" class="img-thumbnail" alt="Thumbnail Image">
                                    </div>

                                </div>

                                <div class="text-xs-center">

                                    <div class="table-responsive card-block" style="">


                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['var']->value['Product'];?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['var']->value['Quantity'];?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['var']->value['Price'];?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody class="order_products">

                                            </tbody>
                                            <tfoot>
                                                <tr>

                                                    <th style="text-align: center;width: 100%;">Total</th>

                                                    <th style="text-align: center" colspan="3" class="totalPrice"></th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="card-block">
                                        <button type="button" class="btn btn-outline-danger btn-md btn-round mr-1"><i class="icon-cross"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['CancelOrder'];?>
</button>

                                        <button type="button" class="chatButton btn btn-outline-primary btn-md btn-round mr-1" orderidChat=""><i class="icon-checkmark2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['chat'];?>
</button>
                                        <button type="button" class="processButton btn btn-outline-success btn-md btn-round mr-1" orderidProcess=""><i class="icon-checkmark2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['ProcessOrder'];?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Order Display -->

                    <!-- Process After Chat -->

                    <div class="orderboxes process col-sm-7" style="margin-right: -19px; display:none;" id="process_order_box">
                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['YourAction'];?>
</h4>

                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input id="radioStacked1" name="radio-stacked1" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"><?php echo $_smarty_tpl->tpl_vars['var']->value['ProcessOrder'];?>
</span>
                                        </label>
                                    </fieldset>

                                    <fieldset style="display: none; margin: 10px;" id="deliver">


                                        <span class="custom-control-description"><?php echo $_smarty_tpl->tpl_vars['var']->value['Delivery'];?>
</span>
                                        <select class="selectBox">
                                            <option value="1">Deliver 1</option>
                                            <option value="2">Deliver 2</option>
                                        </select>

                                    </fieldset>


                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input id="radioStacked2" name="radio-stacked1" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"><?php echo $_smarty_tpl->tpl_vars['var']->value['EditOrder'];?>
</span>
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input id="radioStacked3" name="radio-stacked1" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description"><?php echo $_smarty_tpl->tpl_vars['var']->value['CancelOrder'];?>
</span>
                                        </label>
                                    </fieldset>

                                    <div class="card-block" style="text-align: center;">
                                        <button type="button" class="btn btn-primary">
                                            <i class="icon-check2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['labs_Data_Edit'];?>

                                        </button>
                                        <button type="button" class="btn btn-danger mr-1">
                                            <i class="icon-cross2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['close'];?>

                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Process After Chat -->


                    <!-- Process To Confirmation Order -->

                    <div class="orderboxes processOrder col-sm-7" style="margin-right: -19px; display: none" id="">
                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirm'];?>
</h4>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirmMessage'];?>
 <span class="order_id"></span> <?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirmMessage2'];?>
 <span class="clientname"></span> <?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirmMessage3'];?>
 : <span class="address"></span> <br> <?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirmMessage4'];?>
 : <span style="margin-left: 92px;" class="building"></span> <?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirmMessage5'];?>
 : <span style="margin-left: 92px;" class="floor"></span> <?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirmMessage6'];?>
 : <span style="margin-left: 92px;" class="flat"></span>
                                </div>
                                <div class="table-responsive card-block" style="">


                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['var']->value['Product'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['var']->value['Quantity'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['var']->value['Price'];?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody class="order_details">

                                        </tbody>
                                        <tfoot>
                                            <tr>

                                                <th style="text-align: center;width: 100%;"><?php echo $_smarty_tpl->tpl_vars['var']->value['total'];?>
</th>

                                                <th style="text-align: center" colspan="3" class="totalPrice"></th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div style="width:100%;height:230px;" id='orderMap' class="col-md-12 form-group">
                                    </div>

                                    <div class="card-block" style="text-align: center;">
                                        <button type="button" class="btn btn-primary"> 
                                            <i class="icon-check2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['orederExcute'];?>

                                        </button>
                                        <button type="button" class="orederRetreat btn btn-danger mr-1">
                                            <i class="icon-cross2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['orederRetreat'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Process To Confirmation Order -->

                    <!-- Order consulting -->

                    <div class="orderboxes order_consultation col-sm-7" style="margin-right: -19px; display: none" id="">

                        <div style="padding: 10px 0 5px 0; margin-bottom: 30px">

                            <h4 class="card-title col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['orderNum'];?>
</span> <span class="order_number"></span></h4>
                            <h4 class="card-title col-sm-6">عيادة الدمرداش</h4>
                        </div>

                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">

                            <div class="card-body collapse in" aria-expanded="true">
                                <div class="text-xs-center">
                                    <div class="card-block">
                                        <img src="https://test.lomixa.com/style/lomixa/app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-150" alt="Card image">
                                    </div>
                                    <div class="">
                                        <h4 class="card-title">Frances Butler</h4>
                                        <h6 class="card-subtitle text-muted">Doctor</h6>
                                    </div>
                                </div>

                                <div style="text-align:  center;font-size:  15px;padding:  10px 0;">
                                   <?php echo $_smarty_tpl->tpl_vars['var']->value['order'];?>
 <span style="font-size:  21px;font-weight:  bold; padding: 0 25px;">استشارة</span>
                                </div>
                                <div class="card-block">
                                    <div class="card-title" style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['orderDetails'];?>
</div>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                                </div>

                                <div class="text-xs-center">

                                    <div class="card-block">
                                        <button type="button" class="btn btn-outline-danger btn-md btn-round mr-1"><i class="icon-cross"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['CancelOrder'];?>
</button>

                                        <button type="button" class="chatButton btn btn-outline-primary btn-md btn-round mr-1" orderidChat=""><i class="icon-checkmark2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['chat'];?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Order consulting -->

                    <!-- Order Home Visit -->

                    <div class="orderboxes order_visit col-sm-7" style="margin-right: -19px; display: none" id="">

                        <div style="padding: 10px 0 5px 0; margin-bottom: 30px">

                            <h4 class="card-title col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['orderNum'];?>
</span> <span class="order_number"></span></h4> 
                            <h4 class="card-title col-sm-6">عيادة الدمرداش</h4>
                        </div>

                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">

                            <div class="card-body collapse in" aria-expanded="true">


                                <div class="text-xs-center">

                                    <div class="card-block">
                                        <h4 class="card-title">Philip Garrett</h4>
                                        <ul class="list-inline list-inline-pipe">
                                            <li>01002458785</li>

                                        </ul>
                                        <h5 class="card-subtitle text-muted"><i class="icon-location4"></i>Location</h5>
                                    </div>
                                    <div style="text-align:  center;font-size:  15px;padding:  10px 0;">
                                        <?php echo $_smarty_tpl->tpl_vars['var']->value['order'];?>
<span style="font-size:  21px;font-weight:  bold; padding: 0 25px;">زيارة منزلية</span>
                                    </div>
                                    <div class="card-block">
                                        <button type="button" class="btn btn-outline-danger btn-md btn-round mr-1"><i class="icon-cross"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['CancelOrder'];?>
</button>

                                        <button type="button" class="chatButton btn btn-outline-primary btn-md btn-round mr-1" orderidChat=""><i class="icon-checkmark2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['orederExcute'];?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Order Home Visit -->
                    <!-- Order Normal examination -->

                    <div class="orderboxes order_examination col-sm-7" style="margin-right: -19px; display: none" id="">

                        <div style="padding: 10px 0 5px 0; margin-bottom: 30px">

                            <h4 class="card-title col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['orderNum'];?>
</span> <span class="order_number"></span></h4> 
                            <h4 class="card-title col-sm-6">عيادة الدمرداش</h4>
                        </div>

                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">

                            <div class="card-body collapse in" aria-expanded="true">


                                <div class="text-xs-center">

                                    <div class="card-block">
                                        <h4 class="card-title">Philip Garrett</h4>
                                        <ul class="list-inline list-inline-pipe">
                                            <li>01002458785</li>

                                        </ul>
                                    </div>
                                    <div style="text-align:  center;font-size:  15px;">
                                       <?php echo $_smarty_tpl->tpl_vars['var']->value['order'];?>
<span style="font-size:  21px;font-weight:  bold; padding: 0 25px;">كشف عادى</span>
                                    </div>
                                    <div style="text-align:  center;font-size:  15px;padding:  10px 0;">
                                        ميعاد الحجز :  <span style="font-weight:  bold; padding: 0 25px;">9 Am</span>
                                    </div>
                                    <div class="card-block">
                                        <button type="button" class="btn btn-outline-danger btn-md btn-round mr-1"><i class="icon-cross"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['CancelOrder'];?>
</button>

                                        <button type="button" class="chatButton btn btn-outline-primary btn-md btn-round mr-1" orderidChat=""><i class="icon-checkmark2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['orederExcute'];?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Order Normal reveal -->

                    <!-- Order Ambulance -->

                    <div class="orderboxes order_ambulance col-sm-7" style="margin-right: -19px; display: none" id="">

                        <div style="padding: 10px 0 5px 0; margin-bottom: 30px">

                            <h4 class="card-title col-sm-6"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['orderNum'];?>
</span> <span class="order_number"></span></h4> 
                            <h4 class="card-title col-sm-6">عيادة الدمرداش</h4>
                        </div>

                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">
                            <h4 style="text-align: right;padding-bottom: 0;" class="card-block">تم طلب اسعاف</h4>
                            <div class="card-body collapse in" aria-expanded="true">


                                <div class="text-xs-center">

                                    <div class="card-block">
                                        <h4 class="card-title">Philip Garrett</h4>
                                        <ul class="list-inline list-inline-pipe">
                                            <li>01002458785</li>

                                        </ul>
                                    </div>
                                    <div style="width:100%;height:230px;" id='orderAmbulanceMap' class="col-md-12 form-group">
                                    </div>

                                    <div class="card-block" style="text-align: center;">
                                        <button type="button" class="btn btn-primary"> 
                                            <i class="icon-check2"></i> موافقة
                                        </button>
                                        <button type="button" class="orederRetreat btn btn-danger mr-1">
                                            <i class="icon-cross2"></i> الغاء
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Ambulance -->
                    <!-- Process To Confirmation Order -->

                    <div class="orderboxes ambulance_confirm col-sm-7" style="margin-right: -19px; display: none" id="">
                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['orderConfirm'];?>
</h4>
                            </div>
                            <div class="card-body collapse in">

                                <p class="card-title card-block">الاتصال بالعميل لتأكيد الطلب</p>

                                <div class="card-block" style="text-align: center;">
                                    <button type="button" class="btn btn-primary"> 
                                        <i class="icon-check2"></i> تأكيد
                                    </button>
                                    <button type="button" class="orederRetreat btn btn-danger mr-1">
                                        <i class="icon-cross2"></i> الغاء
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Process To Confirmation Order -->

                    <!-- Choose Ambulance -->

                    <div class="orderboxes choose_ambulance col-sm-7" style="margin-right: -19px; display: none" id="">
                        <div class="card profile-card-with-stats border-grey border-lighten-2" style="margin-top: 19px;">
                            <div class="card-header">
                                <h4 class="card-title">اختيار سيارة اسعاف</h4>
                            </div>
                            <div class="card-body collapse in">

                                <div class="table-responsive card-block" style="">


                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>الاسم</th>
                                                <th>مسؤول عربة الاسعاف</th>
                                                <th>الرخصة</th>
                                            </tr>
                                        </thead>
                                        <tbody class="order_details">
                                        <td>
                                            <input type="radio" name="input-radio-3" id="input-radio-11">
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tbody>

                                    </table>

                                </div>
                                <div class="card-block" style="text-align: center;">
                                    <button type="button" class="btn btn-primary"> 
                                        <i class="icon-check2"></i> اختيار سيارة
                                    </button>
                                    <button type="button" class="orederRetreat btn btn-danger mr-1">
                                        <i class="icon-cross2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['orederRetreat'];?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Choose Ambulance  -->

                </div>  
            </div>
        </div>
    </div>
</div>
<!-- Start Edit Modal -->

<div class="modal hide fade text-xs-left" id="edit-order" role="dialog" aria-labelledby="myModalLabel34" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title" id="myModalLabel34"></h3>
            </div>
            <form  method="POST">
                <div class="modal-body">

                    <!-- Start Select Box -->

                    <div class="row match-height">
                        <div class="col-xl-6 col-md-12">
                            <div class="form-group">

                                <select class="select7" style="width: 500px">
                                    <option value="3620194" selected="selected">Select a value......</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <!-- End Select Box -->

                    <!-- Start Field Edit -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 selectit" id="selectitem" order="">


                        </div>

                    </div>

                    <!-- End Field Edit -->

                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" value="Reset">
                    <input data-dismiss="modal" orderid='' type="button" class="ordersaveValue btn btn-outline-primary btn-lg" value="save">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Edit Modal  -->

<!-- End Modal Chat Box -->
<?php }} ?>