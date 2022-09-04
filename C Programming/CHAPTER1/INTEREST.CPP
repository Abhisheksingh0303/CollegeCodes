#include<stdio.h>
#include<conio.h>
int main()
{
float principle,rate,time,SI;
printf("enter the principle");
scanf("%f",&principle);

printf("enter the time");
scanf("%f",&time);

printf("enter the rate");
scanf("%f",&rate);
SI=(principle*time*rate)/100;
printf("simple interset = %f",SI);
getch();

}
