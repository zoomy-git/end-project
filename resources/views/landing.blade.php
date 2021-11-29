<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.import')
    <style>
        body{
            
            margin: auto;
            padding-bottom: 10rem;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            
            background-color: #F8F5F1;
        }

        .light{
            background-color: #F8F5F1;
            color: #57443E;

        }

        .dark{
            background-color: #E9896A;
            color: #F8F5F1;
        }

    </style>
    <title>Landing Page</title>
</head>

<body>
    <div class="d-flex">
        <div class="container-sm">
            <span>
                
            <h1><strong>Some Web App</strong></h1>
            <h4>some persuasive words to make you want to use this web app</h4> 
            </span>
        </div>
        <div class="container-sm w-auto">
            <div class="card mx-auto rounded-3" style="height: 18rem; width: 18rem;">
                <div class="card-body d-flex justify-content-center dark">
                    <form action="/login" class="align-items-center">
                        <h1>Login</h1>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="email" placeholder="username/email">
                        </div>
                        <div class="mb-3">
                          <input type="password" class="form-control" id="password" placeholder="password">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn" style="background-color: #DB7E61;">Login</button>
                        </div>
                        <div id="labelRegister" class="form-text dark">Belum punya akun? klik 
                        <a href='/register' style="color: #57443E;">disini</a>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</body>

</html>
