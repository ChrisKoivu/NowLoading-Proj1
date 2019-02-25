

function trackLink2(userId, linkId){    
  console.log(userId);
    axios.post('/api/tracks/?link_id=' + linkId + '&user_id=' + userId)
    .then((response)=>{
        console.log(response.data)
    }).catch((error)=>{
        console.log(error.response.data)
    });
}

