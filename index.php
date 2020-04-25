<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home :: Email</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

   <!--header section-->


    <section class="header" id="header" >
       <div class="navbar">
           <a href="index.php" class="navbar-brand"><span>Email</span></a>
        <input type="search" name="search" placeholder="search" class="search">
           
        <div class="users">
         <img src="img/2.jpg" alt="" class="user-img">
          <div class="user-name">
               <?php require_once ('profile_name.php');?>
        
              
              </div>

            </div>
           

       </div>
     
      
        </section>
        <section class="content">
        <div class="content__left">
        <section class="navigation">
        <!-- Main -->
        <div class="navigation__list">
       
        <div class="collapse in" id="main">
        <a href="#" class="navigation_list_item" onclick="openemail(event,'Inbox')" id="defaultOpen">
<!--        <i class="fa fa-inbox"></i>-->
        <span>Inbox</span>
        </a>
        <a href="#" class="navigation_list_item" onclick="openemail(event,'Starred')">
<!--        <i class="fa fa-certificate"></i>-->
        <span>Starred</span>
        </a>
        <a href="#" class="navigation_list_item" onclick="openemail(event,'sent_email')">
<!--        <i class="fa fa-envelope-o"></i>-->
        <span>Sent emails</span>
        </a>
        </div>
        </div>
        
        
        <div class="navigation__list">
        <div class="collapse in" id="main">
        <a href="#" class="navigation_list_item" onclick="openemail(event,'Draft')" >
      
<!--        <i class="fa fa-file-text-o"></i>-->
        <span>Draft</span>
        </a>
        </div>
        </div>
        
        <div class="pagewrapper">

        <div class="navigation_icons">
           <a href="message.php" <i class="fa fa-comments-o" id="message"  </i>BUDDY ONLINE</a>
        </div>
      </div>
        </section>
        
        </div>

        <!--content part-->
        



        <div class="content__middle">
        <div class="user_content">
        
      
    
        <!-- inbox part -->
        
        <div class="conte_mails" id="Inbox">
        <div class="mails" id="now">
        <div class="mails__art">
        <input type="checkbox" name="checkbox">   
         <a href="#"><i class="fa fa-star fa-1x"></i></a> 
        </div>
        <div class="mails__number"></div>
        <div class="mails__added">
        
        </div>
        <a href="#" onclick="" class="mails__title">
            
            <div class="mails__title" id="open">New email from andela</div>
        </a>
        <div class="mails_delete">
        <i class="fa fa-trash" onclick="removeElement()" value="Remove"></i>
        </div>
        
        </div>
        <div class="mails" id="now1">
        <div class="mails__art">
        <input type="checkbox" name="checkbox">   
        <i class="fa fa-star fa-1x"></i>
        </div>
        <div class="mails__number"></div>
        <div class="mails__added">
         
        </div>
        <a href="#" onclick="" class="mails__title">
        <div class="mails__title">New email from andela</div>
        </a>
        <div class="mails_delete">
        <i class="fa fa-trash" onclick="removeElement0()" value="Remove"></i>
        </div>
        
        </div>
        <div class="mails" id="now0">
        <div class="mails__art">
        <input type="checkbox" name="checkbox">   
         <i class="fa fa-star fa-1x"></i>
         </div>
         <div class="mails__number"></div>
          <div class="mails__added">
          
           </div>
           <a href="#"  onclick="" class="mails__title">
            <div class="mails__title">New email from andela</div>
            </a>
           <div class="mails_delete">
            <i class="fa fa-trash" onclick="removeElement1()" value="Remove"></i>
            </div>
            
        </div>
        <div class="mails" id="now2">
        <div class="mails__art">
        <input type="checkbox" name="checkbox">   
        <i class="fa fa-star fa-1x"></i>
        </div>
        <div class="mails__number"></div>
        <div class="mails__added">
        
        </div>
        <a href="#"  onclick="" class="mails__title">
        <div class="mails__title">New email from andela</div>
        </a>
        <div class="mails_delete">
        <i class="fa fa-trash" onclick="removeElement2()" value="Remove"></i>
        </div>
        
        </div>
        <div class="mails" id="now3">
        <div class="mails__art">
        <input type="checkbox" name="checkbox">   
        <i class="fa fa-star fa-1x"></i>
        </div>
        <div class="mails__number"></div>
        <div class="mails__added">
        
        </div>
        <a href="#"  onclick="" class="mails__title">
        <div class="mails__title">New email from andela</div>
        </a>
        <div class="mails_delete">
        <i class="fa fa-trash" onclick="removeElement3()" value="Remove"></i>
        </div>
        
        </div>
        </div>


        <!--starred part-->
        <div class="conte_mails" id="Starred">
            <div class="mails" id="now4">
            <div class="mails__art">
            <input type="checkbox" name="checkbox">   
            <i class="fa fa-star fa-1x"></i>
            </div>
            <div class="mails__number"></div>
            <div class="mails__added">
            
            </div>
            <a href="#">
            <div class="mails__title">New email from andela</div>
            </a>
            <div class="mails_delete">
            <i class="fa fa-trash" onclick="removeElement4()" value="Remove"></i>
            </div>
            
            </div>
            <div class="mails" id="now5">
            <div class="mails__art">
            <input type="checkbox" name="checkbox">   
             <a href="#"><i class="fa fa-star fa-1x"></i></a> 
            </div>
            <div class="mails__number"></div>
            <div class="mails__added">
             
            </div>
            <a href="#">
            <div class="mails__title">New email from andela</div>
            </a>
            <div class="mails_delete">
            <i class="fa fa-trash" onclick="removeElement5()" value="Remove"></i>
            </div>
            
            </div>
            <div class="mails" id="now6">
            <div class="mails__art">
            <input type="checkbox" name="checkbox">   
             <i class="fa fa-star fa-1x"></i>
             </div>
             <div class="mails__number"></div>
              <div class="mails__added">
              
               </div>
               <a href="#">
               <div class="mails__title">New email from andela</div>
                </a>
               <div class="mails_delete">
                <i class="fa fa-trash" onclick="removeElement6()" value="Remove"></i>
                </div>
                
            </div>
            <div class="mails" id="now7">
            <div class="mails__art">
            <input type="checkbox" name="checkbox">   
            <i class="fa fa-star fa-1x"></i>
            </div>
            <div class="mails__number"></div>
            <div class="mails__added">
            
            </div>
            <a href="#">
            <div class="mails__title">New email from andela</div>
            </a>
            <div class="mails_delete">
            <i class="fa fa-trash" onclick="removeElement7()" value="Remove"></i>
            </div>
            
            </div>
            <div class="mails" id="now8">
            <div class="mails__art">
            <input type="checkbox" name="checkbox">   
             <a href="#"><i class="fa fa-star fa-1x"></i></a> 
            </div>
            <div class="mails__number"></div>
            <div class="mails__added">
            
            </div>
            <a href="#">
                    <div class="mails__title">New email from andela</div>
                    </a>
            <div class="mails_delete">
            <i class="fa fa-trash" onclick="removeElement8()" value="Remove"></i>
            </div>
            
            </div>
            </div>

            <!--sent email part-->
            <div class="conte_mails" id="sent_email">
                <div class="mails" id="now9">
                <div class="mails__art">
                <input type="checkbox" name="checkbox">   
                <i class="fa fa-star fa-1x"></i>
                </div>
                <div class="mails__number"></div>
                <div class="mails__added">
                
                </div>
                <a href="#">
                        <div class="mails__title">New email from andela</div>
                        </a>
                <div class="mails_delete">
                <i class="fa fa-trash" onclick="removeElement9()" value="Remove"></i>
                </div>
                
                </div>
                <div class="mails" id="now10">
                <div class="mails__art">
                <input type="checkbox" name="checkbox">   
                <i class="fa fa-star fa-1x"></i>
                </div>
                <div class="mails__number"></div>
                <div class="mails__added">
                 
                </div>
                <a href="#">
                        <div class="mails__title">New email from andela</div>
                        </a>
                <div class="mails_delete">
                <i class="fa fa-trash" onclick="removeElement10()" value="Remove"></i>
                </div>
                
                </div>
                <div class="mails" id="now11">
                <div class="mails__art">
                <input type="checkbox" name="checkbox">   
                 <i class="fa fa-star fa-1x"></i>
                 </div>
                 <div class="mails__number"></div>
                  <div class="mails__added">
                  
                   </div>
                   <a href="#">
                        <div class="mails__title">New email from andela</div>
                        </a>
                   <div class="mails_delete">
                    <i class="fa fa-trash" onclick="removeElement11()" value="Remove"></i>
                    </div>
                    
                </div>
                <div class="mails" id="now12">
                <div class="mails__art">
                <input type="checkbox" name="checkbox">   
                <i class="fa fa-star fa-1x"></i>
                </div>
                <div class="mails__number"></div>
                <div class="mails__added">
                
                </div>
                <a href="#">
                        <div class="mails__title">New email from andela</div>
                        </a>
                <div class="mails_delete">
                <i class="fa fa-trash" onclick="removeElement12()" value="Remove"></i>
                </div>
                
                </div>
                <div class="mails" id="now13">
                <div class="mails__art">
                <input type="checkbox" name="checkbox">   
                <i class="fa fa-star fa-1x"></i>
                </div>
                <div class="mails__number"></div>
                <div class="mails__added">
                
                </div>
                <a href="#">
                        <div class="mails__title">New email from andela</div>
                        </a>
                <div class="mails_delete">
                <i class="fa fa-trash" onclick="removeElement13()" value="Remove"></i>
                </div>
                
                </div>
                </div>

                <!--daft part-->

                <div class="conte_mails" id="Draft">
                        <div class="mails" id="now14">
                        <div class="mails__art">
                        <input type="checkbox" name="checkbox">   
                         <a href="#"><i class="fa fa-star fa-1x"></i></a> 
                        </div>
                        <div class="mails__number"></div>
                        <div class="mails__added">
                        
                        </div>
                        <a href="#">
                                <div class="mails__title">New email from andela</div>
                                </a>
                        <div class="mails_delete">
                        <i class="fa fa-trash" onclick="removeElement14()" value="Remove"></i>
                        </div>
                        
                        </div>
                        <div class="mails" id="now15">
                        <div class="mails__art">
                        <input type="checkbox" name="checkbox">   
                         <a href="#"><i class="fa fa-star fa-1x"></i></a> 
                        </div>
                        <div class="mails__number"></div>
                        <div class="mails__added">
                         
                        </div>
                        <a href="#">
                                <div class="mails__title">New email from andela</div>
                                </a>
                        <div class="mails_delete">
                        <i class="fa fa-trash" onclick="removeElement15()" value="Remove"></i>
                        </div>
                        
                        </div>
                        <div class="mails" id="now16">
                        <div class="mails__art">
                        <input type="checkbox" name="checkbox">   
                          <a href="#"><i class="fa fa-star fa-1x"></i></a> 
                         </div>
                         <div class="mails__number"></div>
                          <div class="mails__added">
                          
                           </div>
                           <a href="#">
                                <div class="mails__title">New email from andela</div>
                                </a>
                           <div class="mails_delete">
                            <i class="fa fa-trash" onclick="removeElement16()" value="Remove"></i>
                            </div>
                            
                        </div>
                        <div class="mails" id="now17">
                        <div class="mails__art">
                        <input type="checkbox" name="checkbox">   
                         <a href="#"><i class="fa fa-star fa-1x"></i></a> 
                        </div>
                        <div class="mails__number"></div>
                        <div class="mails__added">
                        
                        </div>
                        <a href="#">
                                <div class="mails__title">New email from andela</div>
                                </a>
                        <div class="mails_delete">
                        <i class="fa fa-trash" onclick="removeElement17()" value="Remove"></i>
                        </div>
                        
                        </div>
                        <div class="mails" id="now18">
                        <div class="mails__art">
                        <input type="checkbox" name="checkbox">   
                         <a href="#"><i class="fa fa-star fa-1x"></i></a> 
                        </div>
                        <div class="mails__number"></div>
                        <div class="mails__added">
                        
                        </div>
                        <a href="#">
                                <div class="mails__title">New email from andela</div>
                                </a>
                        <div class="mails_delete">
                        <i class="fa fa-trash" onclick="removeElement18()" value="Remove"></i>
                        </div>
                        
                        </div>
                        </div>
                </section>

   
<div class="email_modal">
    <div class="icon"><a href="#" class="off">X</a></div>
    <div class="modal-header">
        <span class="small">6h ago.</span>
        <div class="modal-body"><p><b>Oliver Too</b> hi doe i just want to
   
        Lorem ipsum dolor amet gentrify glossier locavore messenger bag chillwave hashtag irony migas wolf kale chips small batch kogi direct trade shaman.
        
        </p>
        <h4>find me on Lorem ipsum dolor amet gentrify glossier locavore messenger bag chillwave </h4>
        
        <p><b>Oliver Too</b> hi doe i just want to
   
            Lorem ipsum dolor amet gentrify glossier locavore messenger bag chillwave hashtag irony migas wolf</p>
        <img src="img/product-image.jpg" alt="this is me">
        <p>get back to me ASAP if  Lorem ipsum dolor amet gentrify 
        Lorem ipsum dolor amet gentrify glossier locavore messenger
        Lorem ipsum dolor amet gentrify glossier locavore messenger
        </p>
        
        
        </div>
        
        
    </div>
    
    
    
    
    
</div>


        
    
                <script src="js/js.js"></script>
      
        <script>
 </script>
</body>
</html>