<style type="text/css">
    #admin{
        margin: auto;
        background-color: #263238;
    }

	#dashboard{
        margin: auto;
		text-align: center;
		line-height: 40px;
		padding: 6px;
		text-transform: uppercase;
		background: #373b8b;
		color: White;
	}

	#dashboard {
	
	position: fixed;
	margin-top: -50px;
	width: 25%;
	height: 100%;
	text-align: left;
	float: left;
	background: #263238;
	border: 4px solid rgba(255, 255, 255, 0.1);
	
	}

	#dashboard a{
		color: white;

	}

	#dashboard a:hover{
		
		display: block;
		color:#a1a7d3;
	}

	#dashboard ul li{
		display: block;
		
		width: 100%;
		line-height: 60px;
		font-size: 18px;
		border-bottom: 1px solid rgba(255, 255, 255, .1);
		transition: 0.4s;

	}


	#dashboard ul li a{
		display: block;
		position: relative;

	}



	#dashboard ul li a:hover{
		padding-left: 40px;

	}


	#dashboard ul ul{
		position: static;
		display: none;
	}



	#dashboard ul ul li{
		line-height: 60px;
		border-bottom: none;
	}



	#dashboard ul ul li a{
		padding-left: 20px;

	}

	#dashboard ul li ul li a:hover{
		padding-left: 50px;
	}

	#dashboard ul ul li{
		line-height: 42px;
		border-bottom: none;
	}

	#dashboard ul li a span{
		position: absolute;
		right: 20px;
		top: 50%;
		transform: translateY(-50%);
		font-size: 18px;
		transition: transform 0.4s;
	}

	#dashboard ul li a span.rotate{
		transform: translateY(-50%) rotate(-180deg);
	}

	#dashboard ul .feat-show.show{
		display: block;
	}

	#dashboard ul .user-show.show1{
		display: block;
	}

	#dashboard ul .req-show.show3{
		display: block;
	}
</style>



<br>
<br>
    	

<div class="col-md-1" id ='dashboard'>

	<ul>
        <li> <a href= "{{ route('account.dashboard') }}"> <i class="fa fa-server"> &nbsp; Dashboard </i> </a> </li>
        <li> <a href= "{{ route('account.history') }}"> <i class="fa fa-history"> &nbsp; My Transections </i> </a> </li>
        <li> 
            <a herf="" class="feat-btn">
                <i class="fa fa-money"> &nbsp; Transfers <span class="fa fa-caret-down first"> </span> </i> 
            </a>
            <ul class="feat-show">
                <li>
                    <a href= "#" class="user-btn"> 
                        <i class="fa fa-address-book-o"> &nbsp; My Beneficiaries <span class="fa fa-caret-down second"> 
                        </span> </i> 
                    </a> 
                    <ul class="user-show">
						<li><a href="pharmacyReg.php"><i class="fas fa-exchange-alt"> &nbsp; Transfer Funds </i></a></li>
                        <li><a href="{{ route('RegAdmin') }}"><i class="fa fa-user-plus"> &nbsp; Add Beneficiary </i></a></li>
                        <li><a href="{{ route('RegEmp') }}"><i class="fa fa-list"> &nbsp; Beneficiary List </i></a></li>
                    </ul>

                </li>    
                <li> <a href= "SearchUsers.php"> <i class="fa fa-search"> &nbsp; Search Accounts </i> </a> </li>
                
                <li> <a href= "ViewUsers.php"> <i class="fas fa-money-check-alt"> &nbsp; Payments </i> </a> </li>
            </ul>
		</li>
        <li> 
            <a href= "#" class="req-btn"> 
                <i class="fas fa-hand-holding-usd"> &nbsp; Loan Request  <span class="fa fa-caret-down third">
                </span></i> 
            </a>
            <ul class="req-show">
                <li> <a href= "docReq.php"> <i class="fas fa-plus"> &nbsp; Create </i> </a> </li>
                <li> <a href= "pharmacy_req.php"> <i class="far fa-check-circle"> &nbsp; Status </i> </a> </li>
            </ul> 
        </li>
    </ul>

    <script >

        $('.feat-btn').click( function(){
        $('#dashboard ul .feat-show').toggleClass("show");
        $('#dashboard ul .first').toggleClass("rotate");
    });
    
        $('.user-btn').click( function(){
        $('#dashboard ul .user-show').toggleClass("show1");
        $('#dashboard ul .second').toggleClass("rotate");
    });
    
    $('.req-btn').click( function(){
        $('#dashboard ul .req-show').toggleClass("show3");
        $('#dashboard ul .third').toggleClass("rotate");
    });
    
    </script>
</div>
