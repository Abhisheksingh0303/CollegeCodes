#include<stdio.h>
#include<conio.h>
int main()
{
    float tax=0,income;
    printf("enter your income");
    scanf("%f",&income);
    if(income>=250000 &&income<=500000)
    {
    tax =tax+5*(income-250000);
    }

    if(income>=500000 &&income<=1000000)
    {
        tax =tax+20*(income-500000);
    }

    if(income>=1000000)
    {
        tax =tax+30*(income-1000000);
    }
    printf("your net income is to be paid %f\n",tax);
    getch();
}

