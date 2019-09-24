<!DOCTYPE html>
<html>
<head>
<title>Participant Recruitment</title>
    <meta charset="UTF-8">
    <meta name="description" content="Members Recruitment 2nd Phase">
    <meta name="keywords" content="Engbreak,Recruitment,Engbreak19">
    <meta name="author" content="Eng Break">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://engbreak19.com/members_recruitment/" />    
    <meta property="og:image" content="http://engbreak19.com/members_recruitment/img/Engbreak.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="img/icon.png">
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900);
		*{margin:0;padding:0;box-sizing:border-box;}

		body{
			background-size: cover;
			min-height: 100vh;
			display: flex;
			flex-flow: column;
			justify-content: flex-start;
			overflow:auto;
            font-family: 'Open Sans', sans-serif;
            background: #efeeee /* fallback for old browsers */


        }
        input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.red
{
    color: red;
}

form{
     background-color: #19172e;
     border-radius: 2%;
}
		nav{
            text-align: center;
            position: absolute;
            z-index: 99;
        }
        nav img{
            height: 60px;
            width: auto;
            margin: 25px;
        }
		div.msg{
			display: flex;
			flex-flow: column;
			justify-content: center;
			margin-top: 40px;
			position: absolute;
			text-align: center;
			width: 100%;
			top: 20%;
		}
		h2{
			display: block;
            margin: 25px auto;
            letter-spacing: 1px;
            border: none;
            font-size: 50px;
            text-align: center;
            color: #fff;
            padding: 20px 50px;
            background-color: #49a0d5;
            border-radius: 3px;
            cursor: context-menu;
            text-shadow: 2px 2px rgba(101, 182, 230,.4);
		}
		.iq_note{
	        text-align: center;
            display: block;
            letter-spacing: 0px;
            color: #FFF;
            line-height: 30px;
            font-size: 25px;
            padding: 20px;
            cursor: context-menu;
            box-shadow: 0px 0px 20px 0px rgba(255,255,255,0.25);
            margin: 25px auto;
		}
		p.iq_note a{
            border-bottom: 1px dashed;
            color: #FFF;
            font-weight: bold;
            padding-bottom: 5px;
		}
		
        .sponsor{
            text-align: center;
            margin: 30px auto;
            cursor: context-menu;
        }
        .sponsor div {
            display: inline-block;
            margin: 20px;
        }
        .sponsor p{
            color: gold;
            padding: 5px;
            font-size: 25px;
            font-family: 'Titillium Web', sans-serif;
            text-shadow: 1px 1px rgba(101, 182, 230,.4);
        }
        .sponsor img{
            width: 200px
        }

	</style> 
</head>
<body>
<div class="container p-3">
    
                    <form method="POST" action="{{ route('register') }}" class="p-5 text-light">
                    <h3 class="text-center p-3">Registeration form</h3>
                    @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group">
                            <label for="university">{{ __('university') }}</label>
                                <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ old('university') }}" required autocomplete="university" autofocus>

                                @error('university')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group">
                            <label for="college">{{ __('college') }}</label>

                                <input id="college" type="text" class="form-control @error('college') is-invalid @enderror" name="college" value="{{ old('college') }}" required autocomplete="college" autofocus>

                                @error('college')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        <div class="form-group">
                            <label for="phone">{{ __('phone') }}</label>

                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="year">{{ __('academic year') }}</label>
                                <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         
                        <div class="form-group">
                            <label for="firstp">{{ __('first preference') }}</label>
                                <select class="form-control @error('first preference') is-invalid @enderror" value="{{ old('firstp') }}" name="firstp" id="firstp" required autocomplete="firstp" autofocus> 
                                <option value="none">select Work shop</option>
                                          <option value="PS">Photoshop </option>
                                          <option value="AI">Illustrator</option>
                                          <option value="HR">Human Resources</option>
                                          <option value="PR">Marketing</option>
                                          <option value="ER">Entrepreneurship</option>
                                          <option value="WEB">Web Design</option>
                                          <option value="AR">Arduino</option>
                                          <option value="VR">Video Production</option>
                                          <option value="PSp">Public Speaking</option>
                                          
                                        </select>
                                @error('firstp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        <div class="form-group">
                            <label for="secondp">{{ __('second preference') }}</label>
                            <select class="form-control @error('second preference') is-invalid @enderror" value="{{ old('secondp') }}" name="secondp" id="secondp" required autocomplete="secondp" autofocus> 
                                <option value="none">select Work shop</option>
                                          <option value="PS">Photoshop </option>
                                          <option value="AI">Illustrator</option>
                                          <option value="HR">Human Resources</option>
                                          <option value="PR">Marketing</option>
                                          <option value="ER">Entrepreneurship</option>
                                          <option value="WEB">Web Design</option>
                                          <option value="AR">Arduino</option>
                                          <option value="VR">Video Production</option>
                                          <option value="PSp">Public Speaking</option>
                                          
                                </select>
                            

                                @error('secondp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                   
                      
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Now') }}
                                </button>
                        </div>
                    </form>
                </div>
        
    </body>
</html>
