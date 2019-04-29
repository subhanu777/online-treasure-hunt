



<?php 
session_start();
  
if(!$_SESSION['user'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
	
}  
?>
<!DOCTYPE html>
<html>
<script>
function redirect(){ 
    setTimeout(function(){document.getElementById("chargeForm").submit();;}, 1800000);
};

// Set the date we're counting down to
var countDownDate = new Date().getTime()+30*1000*60;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate- now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").value =  "00:"+minutes + ":" + seconds + "";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").value = "EXPIRED";
    document.getElementById('q1').submit();
  }
}, 1000);
</script>

<head>
    <title>Test your debugging skill</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
	


	<style>
	button.logout {
		
		float :right ;
		padding:15px 100px 15px 100px;
		border : 2px solid #64dd17;
		border-radius :16px;
		color :white;
		background-color: #64dd17;
	}
	button:hover{
		
		padding:15px 100px 15px 100px;
		border : 2px solid #64dd17;
		border-radius :16px;
		color :black;
		background-color: #ffffff;
	
		
	}
	</style>
</head>
<body onLoad = "redirect()">
	
     <div class="container">
      <header><font><font size="14"><font style="Verdana"><font color="#800080"><center>
        <div class="pull-left"><b>Test your debugging skill</div>
        <div class="pull-right">Department of Engineering-JNU </b></div>
         </font></center>
		 <span>Username : <?php echo $_SESSION['user']; ?> </span>&nbsp&nbsp
		 <span>Team : <?php echo $_SESSION['teamName']; ?> </span>&nbsp&nbsp 
		<a href ="logout.php" > <button class="logout" > Logout</button></a>
        </header>
      <main>
        <font><font size="4"><font style="Verdana"><font color="#800080">

        <form class="chargeForm" id="chargeForm" data-question="1" method = "post" action = "finalsubmit.php">
		<input name="timer" id = "demo" class="logout" type ="text" value ="0"  />
        <h3><code>(1) int main() <br/>
                      {    <br/>
                       int _=010;<br/>
                       printf("\n value=%d",_);<br/>
                       return 0;<br/>
                      }</code></h3> 
        <ul> 
            <li><input type="radio" name="q1" value="a" />10</li>
            <li><input type="radio" name="q1" value="b" />Compilation error</li>
            <li><input type="radio" name="q1" value="c" />8</li>
            <li><input type="radio" name="q1" value="d" />2</li>
         </ul>
         
        
        
        <h3><code>(2) int main()<br/>
                      {   <br/>
                       int a=54;<br/>
                       printf("\n value of a=%o and value of a=%x",a,a);<br/> 
                       return 0;<br/>
                       }</code></h3>
        <ul> 
            <li><input type="radio" name="q2" value="a" />value of a=54 and a=54</li>
            <li><input type="radio" name="q2" value="b" />value of a=54 and a=36</li>
            <li><input type="radio" name="q2" value="c" />value of a=66 and a=54</li>
            <li><input type="radio" name="q2" value="d" />value of a=66 and a=36</li>
         </ul>
         

        
        <h3><code>(3) int main()<br/>
                    {     <br/>
                      int a=5,b=3;<br/>
                      printf("\n %d",++(a*b+2));<br/> 
                      return 0;<br/>
                     }</code></h3>
        <ul> 
            <li><input type="radio" name="q3" value="a" />17</li>
            <li><input type="radio" name="q3" value="b" />18</li>
            <li><input type="radio" name="q3" value="c" />26</li>
            <li><input type="radio" name="q3" value="d" />error:lvalue required</li>
         </ul>
         
       

      
       
        <h3><code>(4) int main()<br/>
                      {    <br/>
                       int m=1;<br/>
                       int n;<br/>
                       n=(m=m+3,m-1,m%3);<br/>
                       printf("%d",n); <br/>
                       return 0;<br/>
                      }</code></h3>
        <ul> 
            <li><input type="radio" name="q4" value="a" />1</li>
            <li><input type="radio" name="q4" value="b" />4</li>
            <li><input type="radio" name="q4" value="c" />Compilation error</li>
            <li><input type="radio" name="q4" value="d" />3</li>
         </ul>

        

        
        <h3><code>(5) int main()<br/>
                     {   <br/>
                       int i=0,j=1;<br/>
                       printf("\n %d",j++||++i);<br/>
                       printf("\n %d %d",i,j); <br/>
                       return 0; <br/>
                     }</code></h3>
        <ul> 
            <li><input type="radio" name="q5" value="a" />1 <br/> 0 2 <br/> </li>
            <li><input type="radio" name="q5" value="b" />0 <br/> 1 2 <br/> </li>
            <li><input type="radio" name="q5" value="c" />1 <br/> 2 0 <br/> </li>
            <li><input type="radio" name="q5" value="d" />1 <br/> 1 2 <br/> </li>
         </ul>

        
        <h3><code>(6) int main()<br/>
                      {  <br/>
                         double d=1/2.0-1/2;<br/>
                         printf("d=%.21f",d); <br/>
                         return 0; <br/>
                       }</code></h3>
              
            <ul> 
            <li><input type="radio" name="q6" value="a" />0.500000 </li>
            <li><input type="radio" name="q6" value="b" />0.0  </li>
            <li><input type="radio" name="q6" value="c" />1.0000  </li>
            <li><input type="radio" name="q6" value="d" />-0.50000  </li>
         </ul>
          
             
         <h3><code>(7) int main()<br/>
                       {   <br/>
                          if(!1)<br/>
                          printf("\n Bye");<br/>
                          if(-1)<br/>
                          printf("\n Hi!"); <br/>
                          return 0; <br/>
                        }</code></h3>

            <ul> 
            <li><input type="radio" name="q7" value="a" />Bye </li>
            <li><input type="radio" name="q7" value="b" />Compilation error </li>
            <li><input type="radio" name="q7" value="c" />Hi! </li>
            <li><input type="radio" name="q7" value="d" />Garbage value </li>
         </ul>
       

            <h3><code>(8) int main() <br/>
                          {     <br/>
                             char c='0'+2; <br/>
                             printf("Sum=%d and Sum=%c",c,c); <br/>
                             return 0; <br/>
                           }</code></h3>
             <ul>  
            <li><input type="radio" name="q8" value="a" />Sum=50 and Sum=50</li>
            <li><input type="radio" name="q8" value="b" />Sum=50 and Sum=2</li>
            <li><input type="radio" name="q8" value="c" />Sum=2 and Sum=2</li>
            <li><input type="radio" name="q8" value="d" />Sum=2 and Sum=50</li>
         </ul>

           <h3><code>(9) int main()<br/>
                         {    <br/>
                           int a=23;<br/>
                           int b=67; <br/>
                           b=b^a; <br/>
                           a=b^a; <br/>
                           b=b^a; <br/>
                           printf("\n a=%d and b=%d",a,b); <br/>
                           return 0; <br/>
                          }  </code></h3>
             <ul> 
            <li><input type="radio" name="q9" value="a" />a=23 and b=23</li>
            <li><input type="radio" name="q9" value="b" />a=23 and b=67</li>
            <li><input type="radio" name="q9" value="c" />a=67 and b=67</li>
            <li><input type="radio" name="q9" value="d" />a=67 and b=23</li>
         </ul>
                        
            
            <h3><code>(10) int main() <br/>
                           {    <br/>
                            int a=100;<br/>
                            int b; <br/>
                            b=printf("Good")+printf("Boy %d",a); <br/>
                            printf("\t b=%d",b); <br/>
                            return 0; <br/>
                            } </code></h3>
             <ul> 
            <li><input type="radio" name="q10" value="a" />GoodBoy 100  b=10</li>
            <li><input type="radio" name="q10" value="b" />GoodBoy 100  b=11</li>
            <li><input type="radio" name="q10" value="c" />GoodBoy 100  b=7</li>
            <li><input type="radio" name="q10" value="d" />GoodBoy 100  b=8</li>
         </ul>
         
           
            <h3><code>(11) int main() <br/>
                           {  <br/>
                            int p=10,q=20,r; <br/>
                            if(r=p=5||q>20) <br/>
                              printf("%d",r); <br/>
                            else  <br/>
                              printf("\n No output"); <br/>
                            return 0; <br/>
                            }  </code></h3>
             <ul> 
            <li><input type="radio" name="q11" value="a" />5</li>
            <li><input type="radio" name="q11" value="b" />0</li>
            <li><input type="radio" name="q11" value="c" />No output</li>
            <li><input type="radio" name="q11" value="d" />1</li>
         </ul>
 
 
            <h3><code>(12) #define A 1+2 <br/>
                           #define B 3+4 <br/>
                           int main() <br/>
                           {   <br/>
                             int var=A*B; <br/>
                             printf("%d\n",var); <br/>
                             return 0; <br/>
                            } </code></h3>
             <ul> 
            <li><input type="radio" name="q12" value="a" />Error</li>
            <li><input type="radio" name="q12" value="b" />21</li>
            <li><input type="radio" name="q12" value="c" />11</li>
            <li><input type="radio" name="q12" value="d" />Garbage value</li>
         </ul>

       
            <h3><code>(13) int main() <br/>
                           {  <br/>
                             char *msg="what is this"; <br/>
                             msg[2]='y'; <br/>
                             printf("\n string : %s",msg[2]); <br/>
                             return 0; <br/>
                            }</code></h3>
             <ul> 
            <li><input type="radio" name="q13" value="a" />string : whyt is this</li>
            <li><input type="radio" name="q13" value="b" />Error</li>
            <li><input type="radio" name="q13" value="c" />string : what is this</li>
            <li><input type="radio" name="q13" value="d" />string : yt is this</li>
         </ul>

         
           <h3><code>(14) int test(int *b)   <br/>
                          {   <br/>
                            b++; <br/>
                            printf("%d",b[-3]); <br/>
                            return 1; <br/>
                           } <br/>
                           int main() <br/>
                           {     <br/>
                             int a[10]={0,1,2,3,4,5,6,7,8,9}; <br/>
                             test(a+4); <br/>
                             return 0; <br/>
                           } 
                          </code></h3>
             <ul> 
            <li><input type="radio" name="q14" value="a" />1</li>
            <li><input type="radio" name="q14" value="b" />3</li>
            <li><input type="radio" name="q14" value="c" />2</li>
            <li><input type="radio" name="q14" value="d" />4</li>
         </ul>

          

            <h3><code>(15) int test(int b[0][5])  <br/>
                           {    <br/>
                            printf("%d",b[1][2]); <br/>
                            return 0; <br/>
                            } <br/>
                           int main()  <br/>
                           {   <br/>
                              int a[2][5]={0,1,2,3,4,5,6,7,8,9};   <br/>
                              test(a); <br/>
                              return 0; <br/>
                           }  
                          </code></h3>
             <ul> 
            <li><input type="radio" name="q15" value="a" />7</li>
            <li><input type="radio" name="q15" value="b" />6</li>
            <li><input type="radio" name="q15" value="c" />8</li>
            <li><input type="radio" name="q15" value="d" />1</li>
         </ul>


            <h3><code>(16) int test(int (*b)[5]) <br/>
                           {    <br/>
                              printf("%d",b[0][-2]); <br/>
                              return 0; <br/>
                           }  <br/>
                           int main() <br/>
                           {   <br/>
                             int a[2][5]={0,1,2,3,4,5,6,7,8,9}; <br/>
                             test(*(a+1)+1); <br/>
                             return 0; <br/> 
                            }  </code></h3>
             <ul> 
            <li><input type="radio" name="q16" value="a" />1</li>
            <li><input type="radio" name="q16" value="b" />5</li>
            <li><input type="radio" name="q16" value="c" />4</li>
            <li><input type="radio" name="q16" value="d" />6</li>
         </ul>
      
             
             <h3><code>(17) int main()  <br/>
                            {   <br/>
                              printf("Hi Friends"+3); <br/>
                              return 0; <br/>
                            } </code></h3>
             <ul> 
            <li><input type="radio" name="q17" value="a" />Compilation error</li>
            <li><input type="radio" name="q17" value="b" />Hi Friends</li>
            <li><input type="radio" name="q17" value="c" />Hi Friends3</li>
            <li><input type="radio" name="q17" value="d" />Friends</li>
         </ul>
    
  
             <h3><code>(18) int main() <br/>
                            {    <br/>
                              char s1[]="Hello"; <br/>
                              char s2[]="Sweetie"; <br/>
                              s1=s2; <br/>
                              printf("%s",s1); <br/>
                              return 0; <br/>
                            } </code></h3>
             <ul> 
            <li><input type="radio" name="q18" value="a" />Error</li>
            <li><input type="radio" name="q18" value="b" />Hello</li>
            <li><input type="radio" name="q18" value="c" />Sweetie</li>
            <li><input type="radio" name="q18" value="d" />HelloSweetie</li>
         </ul>  

   
            <h3><code>(19) int main()  <br/>
                           {    <br/>
                             int a[]={1,2,3,4,5,6,7,8,9,10}; <br/>
                             for(int i=0;i<10;i++) <br/>
                             printf("\t %d",i[a]); <br/>
                             return 0; <br/>
                           }  </code></h3>
             <ul> 
            <li><input type="radio" name="q19" value="a" />1 2 3 4 5 6 7 8 9 10</li>
            <li><input type="radio" name="q19" value="b" />0 1 2 3 4 5 6 7 8 9</li>
            <li><input type="radio" name="q19" value="c" />Compilation error</li>
            <li><input type="radio" name="q19" value="d" />Garbage value</li>
         </ul>

        
            <h3><code>(20) int main()  <br/>
                           {  <br/>
                            int a[3][3]={1,2,3,4,5,6,7,8,9}; <br/>
                            int *ptr[3]={a[0],a[1],a[2]}; <br/>
                            int i; <br/>
                            for(i=0;i<3;i++) <br/>
                            printf("%d",*ptr[i]); <br/>
                            return 0; <br/>
                           } </code></h3>
             <ul> 
            <li><input type="radio" name="q20" value="a" />012</li>
            <li><input type="radio" name="q20" value="b" />147</li>
            <li><input type="radio" name="q20" value="c" />Garbage values</li>
            <li><input type="radio" name="q20" value="d" />123</li>
         </ul>



             <h3><code>(21) int main() <br/>
                            {   <br/>
                             int val=5; <br/>
                             int *ptr=&val; <br/>
                             printf("%d %d",++val,*ptr); <br/>
                             return 0; <br/>
                            }  </code></h3>
             <ul> 
            <li><input type="radio" name="q21" value="a" />5 6</li>
            <li><input type="radio" name="q21" value="b" />6 5</li>
            <li><input type="radio" name="q21" value="c" />6 6</li>
            <li><input type="radio" name="q21" value="d" />5 5</li>
         </ul>



            <h3><code>(22) int main() <br/>
                           {   <br/>
                            int val=5; <br/>
                            int *ptr=&val; <br/>
                            printf("%d %d",val,++*ptr); <br/>
                            return 0; <br/> 
                           } </code></h3>
             <ul> 
            <li><input type="radio" name="q22" value="a" />6 5</li>
            <li><input type="radio" name="q22" value="b" />5 6</li>
            <li><input type="radio" name="q22" value="c" />6 6</li>
            <li><input type="radio" name="q22" value="d" />Garbage value</li>
         </ul>


           <h3><code>(23) int main() <br/>
                          {  <br/>
                           int a[]={1,2,3,4,5,6}; <br/>
                           int *ptr=a+2; <br/>
                           printf("%d %d",--*ptr+1,1+*--ptr); <br/>
                           return 0; <br/>
                          } </code></h3>
             <ul> 
            <li><input type="radio" name="q23" value="a" />3 2</li>
            <li><input type="radio" name="q23" value="b" />3 3</li>
            <li><input type="radio" name="q23" value="c" />2 3</li>
            <li><input type="radio" name="q23" value="d" />1 2</li>
         </ul>


            <h3><code>(24) int main() <br/>
                           {   <br/>
                            int val=5; <br/>
                            int *ptr=&val; <br/>
                            printf("%d %d",val,(*ptr)++); <br/>
                            return 0; <br/>
                           } </code></h3>
             <ul> 
            <li><input type="radio" name="q24" value="a" />5 5</li>
            <li><input type="radio" name="q24" value="b" />5 6</li>
            <li><input type="radio" name="q24" value="c" />6 6</li>
            <li><input type="radio" name="q24" value="d" />6 5</li>
         </ul>


            <h3><code>(25) int main() <br/>
                           {   <br/>
                            char str[]="Test"; <br/>
                            if((printf("%s",str))==4)  <br/>
                              printf("Success"); <br/>
                            else <br/>
                              printf("Failure"); <br/>
                            return 0; <br/>
                           }  </code></h3>
             <ul> 
            <li><input type="radio" name="q25" value="a" />TestSuccess</li>
            <li><input type="radio" name="q25" value="b" />Success</li>
            <li><input type="radio" name="q25" value="c" />Failure</li>
            <li><input type="radio" name="q25" value="d" />TestFailure</li>
         </ul>


	<button class="btn btn1" style ="margin-left:48px" type = "submit" value = "Submit"><font size="8"><b>Submit</b></button></font>
    
       </form>
       <div id="results"></div>       
       <br/>

       </main>

      
     
     <footer>
          <div class="pull-left">Total: 25 Questions</div>
    </footer>
    </div><!-- container -->
  
  
</font>
</body>
</html>  