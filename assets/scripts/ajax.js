let http;


function sendComments(e) {
    // prevent browser from refreshing, an absolute must for AJAX
    e.preventDefault();
    
    console.log("Send comment called");

    // my form
    let commentForm = document.getElementById("commentForm");
    // warning for name
    let w1 = document.getElementById("warning1");
    // warning for message
    let w2 = document.getElementById("warning2");
    // tried to do this with classes instead of two seperate ids, but that ran into some issues
    
    const name = commentForm["Name"].value;
    const message = commentForm["Message"].value;

    console.log("Name: " , name);
    console.log("Message: " , message);

// form validation if user does not enter in required fields
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

    // makes my JSON request
    const request =  {
        "name" : name,
        "message" : message
    };

    console.log(request);

    // creates object
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
            console.log("Response data: ", responseData);
            // parses all the data to JSON format
            let payload = JSON.parse(responseData);
            if (payload.success) {
                getComments();
            }
        }
    }
}

function getComments() {
    // creates object
    http = new XMLHttpRequest();
    // sends this to my cleaning file
    http.open("POST", "assets/data/comment.data.php", true);
    // whenever the state changes, the handleGetResponse function will be called
    http.onreadystatechange = handleGetResponse;
    // sends it
    http.send();
}

function handleGetResponse(response) {
    if (http.readyState == 4) {
        if (http.status >= 200 && http.status < 300) {
            let responseData = http.responseText;
            let payload = JSON.parse(responseData);

            const commentArea = document.getElementById("commentList");

            // Professor did show me this, however I believe it was causing all of my elements 
            // including my h2 to disappear. Decided to go with firstChild instead.
            
            // while (commentArea.children.length > 0) {
            //     commentArea.removeChild(commentArea.children[0]);
            // }

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