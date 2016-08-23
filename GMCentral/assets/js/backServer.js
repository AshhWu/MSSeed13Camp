var mysql = require('mysql');
var io = require('socket.io');

var http = require('http');

var server = http.createServer(function(request, response){
  console.log('Connection');
  response.writeHead(200, {'Content-Type': 'text/html'});
  response.write('Hello, World.');
  response.end();
});

server.listen(8001);

	/* Test */
renewServer = function(){
	var connection = mysql.createConnection({
    	host: 'ap-cdbr-azure-east-c.cloudapp.net',
    	user: 'b37f8ddf38d21d',
    	password: '1e72c81e',
    	database: 'stronghold'
	});
	connection.connect();
	connection.query('SELECT 12 + 34 AS result', function(err, rows, fields) {
    if (err) throw err;
    console.log('The result is: ', rows[0].result);
	connection.end();
  
    //顯示撈取資料
  		console.log(results[0]);
	});
}	
