#include<stdio.h>
#include<conio.h>
int main()
{
 int year;
 printf("enter your year");
 scanf("%d",&year);
 if(year%400==0)
 {
     printf("your year %d is leap year",year);
 }
 else if(year%100==0)
 {

  printf("your year %d is NOT leap year",year);
 }

 if(year%4==0)
 {
     printf("your year %d is leap year",year);
 }

 else
 {
    printf("your year %d is NOT leap year",year);
 }


getch();
}
