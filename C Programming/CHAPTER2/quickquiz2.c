#include<stdio.h>
#include<conio.h>
int main()
{
 int subject,hindi,english,maths;
 float total;
 printf("enter your hindi marks");
 scanf("%d",&hindi);

  printf("enter your english marks");
 scanf("%d",&english);

 printf("enter your maths marks");
 scanf("%d",&maths);

total=(hindi+english+maths)/3;
if(total<40)
{
    printf("your total percentage is %f and you are FAIL",total);
}

 else if(hindi<33)
 {
     printf("fail");
 }

else if(english<33)
 {
     printf("fail");
 }

 else if (maths<33)

     printf("fail");

     else
     {
         printf("pass");
     }
getch();
}
