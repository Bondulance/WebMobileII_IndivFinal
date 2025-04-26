let http;


function sendComments(e) {
    e.preventDefault();
    
    console.log("Send comment called");

    
    let commentForm = document.getElementById("commentForm");
    let w1 = document.getElementById("warning1");
    let w2 = document.getElementById("warning2");
    
    const name = commentForm["Name"].value;
    const message = commentForm["Message"].value;

    console.log("Name: " , name);
    console.log("Message: " , message);


    if (name === "") {
        w1.innerText = "Please enter in a name";
        w1.style.color = "red";
        console.log("name is empty");
       
    } else {
        w1.innerText = "";
    }

    if (message === "") {
        w2.innerText = "Please enter in a message";
        w2.style.color = "red";
        console.log("message is empty");
      
    } else {
        w2.innerText = "";
    }

    console.log("validated");

    const request =  {
        "name" : name,
        "message" : message
    };

    console.log(request);

    http = new XMLHttpRequest();
    // this will open up a connection to send the request to get converted to JSON.
    // It is also asynchronous, reason for the third parameter being true.
    http.open("POST", "assets/data/comment.data.php", true);
    http.onreadystatechange = handleSubmitResponse;
    http.send(JSON.stringify(request));
}

function handleSubmitResponse(response) {
    if (http.readyState == 4) {
        if (http.status >= 200 && http.status < 300) {
            let responseData = response.target.response;
            let payload = JSON.parse(responseData);
            if (payload.success) {
                getComments();
            }
        }
    }
}

function getComments() {
    http = new XMLHttpRequest();
    http.open("POST", "assets/data/comment.data.php", true);
    http.onreadystatechange = handleGetResponse;
    http.send();
}

function handleGetResponse(response) {
    if (http.readyState == 4) {
        if (http.status >= 200 && http.status < 300) {
            let responseData = http.responseText;
            let payload = JSON.parse(responseData);

            const commentArea = document.getElementById("commentList");

            while (commentArea.firstChild) {
                commentArea.removeChild(commentArea.firstChild);
            }

            payload.forEach(comment => {
                const commentDiv = document.createElement("div");
                const nameTitle = document.createElement("h4");
                const messageText = document.createElement("p");

                nameTitle.textContent = comment.Name;
                messageText.textContent = comment.Message;

                commentDiv.appendChild(nameTitle);
                commentDiv.appendChild(messageText);
                commentArea.appendChild(commentDiv);
            });
        }
    }
 }