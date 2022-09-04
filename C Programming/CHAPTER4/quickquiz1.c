//Average of three number using function
#include<stdio.h>
float average(int a, int b, int c);
int main()
{
    int a,b,c;
    printf("enter the first value%d\n",a);
    scanf("%d",&a);

    printf("enter the first value%d\n",b);
    scanf("%d",&b);


    printf("enter the first value%d\n",c);
    scanf("%d",&c);

    printf("The average value the three numbers are %f",average(a,b,c));
    return 0;
}
float average(int a, int b, int c)
{
    float result;
    result=(float)(a+b+c)/3;
    return result;
}

