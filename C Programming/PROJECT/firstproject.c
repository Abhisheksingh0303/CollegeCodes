#include<stdio.h>
#include<stdlib.h>
#include<time.h>
#include<conio.h>

int main()
{
    int number, guess,nguess=1;
    srand(time(0));
    number=rand()%100+1;
   // printf("The number is%d",number);
    do{
        printf("\nGuess the number\n");
        scanf("%d",&guess);
        if(guess>number)
        {
           printf("Lower number please\n");

        }
        else if(guess<number){
            printf("Higher number please\n");
        }
        else{
            printf("Congrtulation you guessed it in %dtimes\n",nguess);
        }
        nguess++;
    }while(guess!=number);
getch();
}

