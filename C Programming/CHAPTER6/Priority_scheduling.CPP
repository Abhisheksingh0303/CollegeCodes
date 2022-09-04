#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
clrscr();
int bt[20],at[10],n,i,j,temp,p[10],st[10],ft[10],wt[10],tat[10];
int totwt=0,tottat=0;
float awt,atat;
char pn[10][10],t[10];
clrscr();
printf("Enter the number of process:");
scanf("%d",&n);
for(i=0; i<n; i++)
{
printf("Enter process name:");
scanf("%s",&pn[i]);
printf("Enter arrival time:");
scanf("%d",&at[i]);
printf("Enter burst time:");
scanf("%d",&bt[i]);
printf("Enter priority:");
scanf("%d",&p[i]);
}
for(i=0; i<n; i++)
for(j=0; j<n; j++)
{
if(p[i]<p[j])
{
temp=p[i];
p[i]=p[j];
p[j]=temp;
temp=at[i];
at[i]=at[j];
at[j]=temp;
temp=bt[i];
bt[i]=bt[j];
bt[j]=temp;
strcpy(t,pn[i]);
strcpy(pn[i],pn[j]);
strcpy(pn[j],t);
}
}
for(i=0; i<n; i++)
{
if(i==0)
{
st[i]=at[i];
wt[i]=st[i]-at[i];
ft[i]=st[i]+bt[i];
tat[i]=ft[i]-at[i];
}
else
{
st[i]=ft[i-1];
wt[i]=st[i]-at[i];
ft[i]=st[i]+bt[i];
tat[i]=ft[i]-at[i];
}
totwt+=wt[i];
tottat+=tat[i];
}
awt=(float)totwt/n;
atat=(float)tottat/n;
printf("\nPName\tArrival-time\tBurst-time\tPriority\tWaiting-time\tTat-time");
for(i=0; i<n; i++)
printf("\n%s\t%5d\t\t%5d\t\t%5d\t\t\%5d\t\t%5d",pn[i],at[i],bt[i],p[i],wt[i],tat[i]);
printf("\nAverage waiting time is:%f",awt);
printf("\nAverage turnaroundtime is:%f",atat);
getch();
}
