const express = require('express');
const path = require('path');


const app = express();
app.use('/static', express.static('static'));
app.set('view engine', 'pug');
app.set('views', path.join(__dirname, '/static/pug'));


app.get('/', (req,res)=>{
    res.status(200).render('home.pug');
})

app.listen(2024, ()=>{
    console.log('server is running on port 2024');
})