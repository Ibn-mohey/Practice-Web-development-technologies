const http = require('http');

// routes
const routes = require('./routes');



//createServer will get requetst listener req and res > routes function

const server = http.createServer(routes);


server.listen(3000);