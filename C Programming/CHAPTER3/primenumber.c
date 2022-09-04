#include<stdio.h>
#include<conio.h>
int main()
{
    int num, i;
printf("enter a number");
scanf("%d",&num);
 for(i=2;i<num;i++){
if(num%i==0){
    printf("the number you entered is a prime number");
}
else
{
    printf("it is not a prime number");
}
getch();
 }
}
