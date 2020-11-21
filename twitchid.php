<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Twitch ID - Jens Møller</title>
<link rel="icon" href="https://jensz12.com/favicon.png">
<meta name="description" content="Twitch ID - Jens Møller">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Twitch ID - Jens Møller">
<meta name="twitter:description" content="Twitch ID - Jens Møller">
<meta name="twitter:image:src" content="https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="/https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-LRlmVvLKVApDVGuspQFnRQJjkv0P7/YFrw84YYQtmYG4nK8c+M+NlmYDCv0rKWpG" crossorigin="anonymous">
<style>
body {
	background-image: url(https://design.jensz12.com/images/screen-back.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 35px;
}
a:link, a:visited {
	color: rgb(102, 102, 102);
	text-decoration: none;
}
a:hover, a:active {
	text-decoration: underline;
}
.player {
    margin-top: 2px;
    margin-bottom: 2px;
    margin-right: 2px;
    margin-left: 2px;
}
.fa-heart {
	color: #A81010;
}
.fa-envelope {
  color: black;
}
.fa-twitter {
  color: #1DA1F2;
  margin: 5px;
  }
.fa-discord {
  color: #7289DA;
  margin: 5px;
}
.fa-github {
  color: black;
  margin: 5px;
}
.fa-instagram {
  color: #E1306C;
  margin: 5px;
}
.fa-snapchat {
  color: #FFFC00;
  margin: 5px;
}

</style>
<script>
	if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
</script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="jumbotron">
        <h1 class="display-1 text-center">Twitch ID finder</h1>
         <div class="text-center">
		 <input type="text" id="q" name="q" style="text-align: center; width: 150px" placeholder="username or user id" autocomplete=off /><br>
			<div style="text-align: center;">
		</div>
        <small>
            Detected: <span id="detected"></span> <a href="#" title="click to manually switch between username and user id" id="switch">&#8644;</a><br/>
        </small>
		<div id="result" style="display: none;">
			<b id="response"></b> <a id="copy" href="#">copy</a><br/>
		</div>
        <small id="error" style="color: red;"></small>
        <small id="success" style="color: green;"></small>
		<small id="copied" style="color: blue;"></small>
    </div>
	   </div>
    </div>
  </div>
</div>
<!--<script src="https://static.jensz12.com/script/snowstorm.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"crossorigin="anonymous"></script>
<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
const CLIENT_ID = 'abe7gtyxbr7wfcdftwyi9i5kej3jnq';

const TYPE_USERNAME = 'Username';
const TYPE_USER_ID = 'User id';

let detected = TYPE_USERNAME;

let resultDiv = document.getElementById("result");
let queryInput = document.getElementById('q');
let queryOutput = document.getElementById('response');
let detectedText = document.getElementById('detected');
let detectedSwitch = document.getElementById('switch');
let copyLink = document.getElementById("copy");
let errorMsg = document.getElementById("error");
let successMsg = document.getElementById("success");
let copiedMsg = document.getElementById("copied");

setDetected(TYPE_USERNAME);

queryInput.addEventListener('keyup', function (e) {
    let key = e.which || e.keyCode;
    if (key === 13) {
        runRoutine(queryInput.value, detected);
    } else {
        runDetection(queryInput.value, (response) => setDetected(response));
    }
});

detectedSwitch.addEventListener('click', function (e) {
    if(detected === TYPE_USERNAME) {
        setDetected(TYPE_USER_ID);
    } else {
        setDetected(TYPE_USERNAME);
    }
	// if they're switch the mode while the textbox has content, there's a good chance they want to re-run it in the new mode
	if(queryInput.value.length > 0) {
		runRoutine(queryInput.value, detected);
	}
});

copyLink.addEventListener('click', function (e) { copyResults(); });

function runDetection(input, callback) {
    if(isNaN(input)) {
        callback(TYPE_USERNAME);
    } else {
        callback(TYPE_USER_ID)
    }
}

function setDetected(newValue) {
    detected = newValue;
    detectedText.innerText = newValue;
}

function runRoutine(input, type) {
    clearError();

    if(input.length <= 0) {
        setError("Please provide an username or user id!");
        return;
    }

    if (type === TYPE_USERNAME) {
        getUserId(fetchUserId, failedRequest);
    } else if (type === TYPE_USER_ID) {
        getUsername(fetchUsername, failedRequest);
    }
}

function fetchUserId(json, username) {
    if ("error" in json) {
        badRequest("username", username);
    } else {
        queryOutput.innerText = json['data'][0]['id'];
        setSuccess("User ID retrieved successfully.");
		resultDiv.style.display = "";
    }
}

function fetchUsername(json, userid) {
    if ("error" in json) {
        badRequest("user id", userid);
    } else {
        queryOutput.innerHTML = json['data'][0]['login'];
        setSuccess("Username retrieved successfully.");
		resultDiv.style.display = "";
    }
}

function failedRequest() {
    setError("The request you attempted failed! " + detected + " " + queryInput.value + " doesn't exist.");
	resultDiv.style.display = "none";
	clearSuccess();
}

function badRequest(type, resource) {
    setError("The " + type + " '" + resource + "' was not valid!");
}

function getUserId(fetchUserId, failedRequest) {
    queryOutput.innerText = "";

    let req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState === 4 && req.status === 200) {
            let json = JSON.parse(req.responseText);
            if (json['data'].length > 0) {
                fetchUserId(json, queryInput.value);
            } else {
                badRequest("username", queryInput.value);
            }
        } else if (req.readyState === 4) {
            failedRequest();
        }
    };

    req.open("GET", "https://api.twitch.tv/helix/users?login=" + queryInput.value, true);
    req.setRequestHeader("Accept", "application/json");
    req.setRequestHeader("Client-ID", CLIENT_ID);
    req.send(null);
}

function getUsername(fetchUsername, failedRequest) {
    queryOutput.value = "";

    let req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState === 4 && req.status === 200) {
            let json = JSON.parse(req.responseText);
            if (json['data'].length > 0) {
                fetchUsername(json, queryInput.value);
            } else {
                badRequest("user id", queryInput.value);
            }
        } else if (req.readyState === 4) {
            failedRequest();
        }
    };

    req.open("GET", "https://api.twitch.tv/helix/users?id=" + queryInput.value, true);
    req.setRequestHeader("Accept", "application/json");
    req.setRequestHeader("Client-ID", CLIENT_ID);
    req.send(null);
}

function setSuccess(successMsgCnts) {
    successMsg.innerHTML = successMsgCnts;
    setTimeout(clearSuccess, 10000);
	clearError();
}

function setCopied(requestType) {
	copiedMsg.innerHTML = "Copied " + requestType + "!";
	setTimeout(clearCopied, 5000);
}

function clearCopied() {
	copiedMsg.innerHTML = "";
}

function clearSuccess() {
    successMsg.innerHTML = "";
}

function setError(errorMsgCnts) {
    errorMsg.innerHTML = errorMsgCnts;
    setTimeout(clearError, 10000);
}

function clearError() {
    errorMsg.innerHTML = "";
}

function copyResults() {
	results = queryOutput.innerHTML;
	
	if(detected == TYPE_USERNAME) {
		setCopied("user id");
	} else {
		setCopied("username");
	}
	
	document.oncopy = function(event) {
		event.clipboardData.setData("text", results);
		event.preventDefault();
	};
	document.execCommand("copy", false, null);
}

</script>
</body>
</html>
