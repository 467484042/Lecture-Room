<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		  <title>Quiz Game</title>		  
		  <meta name="description" content="Down, down and down">
		  <meta name="author" content="Team B - NWD">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/game.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="js/qnBank.js"></script>
          <script src="js/game.js"></script>
        </head>    
<body style="background:#1e90ff"> 
    <div class="container-fluid">   
        <div class="row">
            <a><h5 class="back" onclick="window.close();">Home</h5></a>
        </div>
        <div class="row">
            <h2 class="header">Quiz Game</h2>
        </div>       
        <div class="que">
            <div class="row">
                <h3 class="que_num"></h3>
            </div>
            <h4 class="question"></h4>
            <input type="hidden" id="number">
            <div class="answer">               
            </div>
        </div>
        <div class="row result_btn">
            <button class="btn btn-default" id="previous">Previous</button>
            <button class="btn btn-default" id="next">Next</button>  
            <button type="button" class="btn btn-success"  onclick="window.location.reload(true);" id="reset" >Reset</button>
            <button type="button" class="btn btn-default" onclick="window.close();" id="finish">Finish</button>          
        </div>       
        <div class="row" style="margin:30px;color:#fff">
            <h2>Rank </h2>
            <table class="table" >
                <thead>
                <tr>
                    <th>Rank</th>
                    <th>name</th>
                    <th>score</th>
                </tr>
                </thead>
                <tbody>                
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Score</h4>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center" style="color: #ec0808;font-weight: bold;"></h4>
                        <div class="form-group">
                            <input type="hidden" id="score_num" >
                            <label for="email">Your name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="save" >Save</button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
