<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.1.css" />
        <link rel="stylesheet" type="text/css" href="css/fg_membersite.css" />
        <link rel="stylesheet" type="text/css" href="css/pwdwidget.css" />

        <title>Hello World</title>

                 
       </head>
    
    <body>
  
  <div data-role="page" id="login">
  <div data-role="header">
  <a href="#homepage" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
  <h1>Register</h1>
  
  <div data-role="navbar">
    <ul>
      <li><a href="#homepage" data-icon="home" class="ui-btn-active ui-state-persist">Home</a></li>
      <li><a href="./login.php" data-icon="lock">Login</a></li>
      <li><a href="#anylink" data-icon="search">Search</a></li>
    </ul>
  </div>

  </div>

  <div data-role="main" class="ui-content">
  
  	<form method="post" class="ui-body ui-body-a ui-corner-all" data-ajax="false">
         <fieldset>
                        <label for="fname" class="ui-hidden-accessible">First name</label>
                        <input type="text" name="username" id="username" placeholder="First name"/>                   
                        <label for="lname" class="ui-hidden-accessible">Last name</label>
                        <input type="text" name="lname" id="lname" placeholder="Last name"/>
                        <label for="email" class="ui-hidden-accessible">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"/>
                        <label for="phone" class="ui-hidden-accessible">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="Phone"/>
                        <label for="username" class="ui-hidden-accessible">Last name</label>
                        <input type="text" name="username" id="username" placeholder="Username"/>                               
                        <label for="password" class="ui-hidden-accessible">Enter your password:</label>
                        <input type="password" name="password" id="password"/> 
                    
           <button data-theme="b" name="submit" id="submit" >Submit</button>
           </fieldset>
       </form>                        
    
  </div>

  <div data-role="footer" data-position="fixed">
    <h1>Footer Text</h1>
  </div>
</div> 

<div data-role="page" id="pagetwo">
        <div data-theme="a" data-role="header">
            <h3>Welcome</h3>
        </div>

        <div data-role="content">

        </div>

        <div data-theme="a" data-role="footer" data-position="fixed">
            <h3>Page footer</h3>
        </div>
    </div>

		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.1.js"></script>
        <script type="text/javascript" src="phonegap.js"></script>
        <script type="text/javascript" src="js/index.js"></script>

        <script type="text/javascript">
            app.initialize();
        </script>
	
		<script>
        	$('#submit').click(function(){
        		return false;
        	});
        </script>
       

    </body>
</html>
