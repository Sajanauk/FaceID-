<!DOCTYPE html>
<html>
 <head>
  <title>Make Google Pie Chart in Laravel</title>
  <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <style>
        .content {
          max-width: 500px;
          margin: auto;
        }
        </style>

 <body>
        <div class = "content">
        <form class="form-horizontal" action="/action_page.php">
        
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                    <label for="sel1">Select Data Set</label>
                    <select class="form-control" id="sel1">
                      <option>Len 1</option>
                      <option>Len 2</option>
                      <option>Len 3</option>
                      <option>Len 4</option>
                    </select>
                        
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          <br>
    <div id="app1" class="col-md-6">
            
            
            {!! $chart->container() !!}
            </div>

  
    
        <script src="https://unpkg.com/vue"></script>
        <script>
            var app = new Vue({
                el: '#app1',
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
        {!! $chart->script() !!}
        
</div>
 </body>
</html>