<?php


/*
 * @app.route("/authenticate", methods=["POST"])
@app.route("/register", methods=["POST"])
@app.route("/run", methods=["POST"])
@app.route("/instance", methods=["POST"])
@app.route("/getDeploymentStatus/<job_id>", methods=["POST"])
@app.route("/getLog/<job_id>", methods=["POST"])
@app.route("/uploadKey", methods=["POST"])
@app.route("/downloadKey", methods=["POST"])
 */
 
 
return array(
	'endpoint_ip'  		  => 'http://104.131.38.159:5050',
	'register'	   		  => '/register',
	'authenticate' 		  => '/authenticate',
	'create_billing' 		   		  => '/create_billing',
	'getDeploymentStatus' 			  => '/getDeploymentStatus',
	'GetCurrentCost' 	   		  => '/GetCurrentCost',
	'Collection' 	   		  => '/Collection',
	'removeUsername'  		  => '/removeUsername'
	);

