const http=require('http')

const hostname='127.0.0.1'
const port=3000
const server=http.createServer((req,res)=>{
 res.end('ani sekar')
})
server.listen(port,hostname,()=>{
 console.log(`server running at http://${hostname}:${port}`)
 })