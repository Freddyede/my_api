$(document).ready(()=> {
    callAjax(api_uri_users,{'Authorization': 'testToken','Demandes' : 'GET'},'GET',(datas) =>{
        JSON.parse(datas[0].users).forEach(user => {
            console.log(user.id+" "+user.email+" "+user.password);
        })
    },(err) =>{
        console.log(err);
    });
});
