
deletes = document.getElementsByClassName("delete");


Array.from(deletes).forEach(element => {


    element.addEventListener("click", (e) => {


        sno=e.target.id.substr(1);

        console.log(sno);

        if (confirm(" GOOD WORK ")) {


            window.location = `/todoapp/index.php?delete=${sno}`;


        } 

        console.log("delete btn is working......");

    });
});