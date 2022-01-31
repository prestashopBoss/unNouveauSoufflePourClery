var namme;
var names = [];
var names2;
var usertr = document.getElementById("nameTR");

/*---soft---*/
document.getElementById("form").addEventListener("submit",(e)=>{
    e.preventDefault();
    Create();
    Read();
    document.getElementById("form").reset();
});

/*---Create---*/
function Create(){
    let storage = JSON.parse(localStorage.getItem("names"));
    namme= document.getElementById("namme").value;
    if (namme=='') {
        alert("The field cannot be empty")
    } else {
        if (storage==null) {
            names.push(namme);
            localStorage.setItem("names",JSON.stringify(names));
        } else {
            names=JSON.parse(localStorage.getItem("names"));
            names.push(namme);
            localStorage.setItem("names",JSON.stringify(names));
        }
    }
}
/*---Read---*/
function Read(){
    usertr.innerHTML='';
    names2= JSON.parse(localStorage.getItem("names"));
    if (names2==null) {
        usertr.innerHTML +=`
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="space">---N°---</th>
            <th scope="col" class="space">---Task to do---</th>
            <th scope="col" class="space"></th>
            <th scope="col" class="space"></th>
          </tr>
        </thead>
          `
    } else {
        usertr.innerHTML +=`
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="space">---N°---</th>
            <th scope="col" class="space">---Task to do---</th>
            <th scope="col" class="space"></th>
            <th scope="col" class="space"></th>
          </tr>
        </thead>
                `
        for (var i = 0; i < names2.length; i++) {
            usertr.innerHTML +=`
            <tbody>
            <tr>
                <th scope="row" class="space">${i+1}</th>
                <td class="space">${names2[i]}</td>
                <td class="space">
                    <button Onclick="Update(${i})" type="button" class="btn btn-outline-warning bi bi-chat-left-text"> Edit</button>
                </td>
                <td class="space">
                    <button Onclick="Delete(${i})" type="button" class="btn btn-outline-danger bi bi-trash"> Delete</button>
                </td>
                </tr>
            </tbody>
        `
        }
    }
}
/*update*/
function Update(i3) {
    let names4= JSON.parse(localStorage.getItem("names"));
    usertr.innerHTML = '';
    usertr.innerHTML +=`
    <thead class="thead-dark">
    <tr>
      <th scope="col" class="space">---N°---</th>
      <th scope="col" class="space">---Task to do---</th>
      <th scope="col" class="space"></th>
      <th scope="col" class="space"></th>
    </tr>
  </thead>
    `
    for(var i = 0; i < names4.length; i++){
        if (i==i3) {
            usertr.innerHTML +=`
            <tbody>
            <tr>
            <td class="space">${i + 1}</td>
                <td class="space">
                    <input id="newName" placeholder="${names4[i]}"></input></td>
                <td class="space">
                <button Onclick="Update2(${i})" type="button" class="btn btn-outline-warning bi bi-pencil-square"> Update</button>
                </td>
                <td class="space">
                    <button Onclick="Read()" type="button" class="btn btn-outline-danger bi bi-x-diamond-fill"> Cancel</button>
                </td>
                </tr>
            </tbody>
            `
            console.log(i3);
            console.log(i);
        } else {
            usertr.innerHTML +=`
            <tbody>
            <tr>
                <th scope="row" class="space">${i+1}</th>
                <td class="space">${names2[i]}</td>
                <td class="space">
                    <button Onclick="update(${i})" type="button" class="btn btn-outline-warning bi bi-chat-left-text"> Edit</button>
                </td>
                <td class="space">
                    <button Onclick="update(${i})" type="button" class="btn btn-outline-danger bi bi-trash"> Delete</button>
                </td>
                </tr>
            </tbody>`
        }
    }
}
function Update2(i) {
    let names5= JSON.parse(localStorage.getItem("names"));
    names5[i] = document.getElementById("newName").value;
    if (names5[i] == '') {
        alert("The field cannot be empty")
        
    } else {
        localStorage.setItem("names", JSON.stringify(names5));
        Read();
    }
}
function Delete(i2) {
    let names3 = JSON.parse(localStorage.getItem("names"));
    names3.splice(i2, 1);
    localStorage.setItem("names", JSON.stringify(names3));
    Read();
}