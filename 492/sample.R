x<-read.table("sample2",row="att",header=TRUE);
tmin<-floor(min(x["Min",]));
tmax<-ceiling(max(x["Max",]));

ymark<-1;

#numbers used when filename is sample2
usermin<-1.45;
usermean<-1.5;
usermax<-1.6;

divisions<-1000;

# numbers used when filename is sample
#usermin<-25
#usermean<-30
#usermax<-47

png("sample.png") 
plot.new();
plot.window(c(tmin,tmax),c(-(ymark+.1),(ymark+.1)));

par(mfrow=c(2,1));# declare 2 rows 1 collumn



maxdiff<-max(abs(x=usermean-usermax),abs(x=usermean-usermin));
mindiff<-min(abs(x=usermean-usermax),abs(x=usermean-usermin));

imagedomain<-seq(tmin,tmax,length=divisions);

dom<-seq((usermean-maxdiff),(usermean+maxdiff),length=divisions);
y<-dnorm(
		x=imagedomain,
		mean=usermean,
		sd=mindiff#maxdiff#(mindiff+maxdiff)/2
		);
y=y*(1/max(y))
plot(
	x=imagedomain,
	y=y,
	type="l",
	lwd=2,
	col="red",
	xlab="",
	ylab="",
	xaxt='n',
	ann=FALSE,
	bty='n'
	);

dom2<-imagedomain[imagedomain>=usermin & imagedomain<=usermax]
y2<-dnorm(
		x=dom2,
		mean=usermean,
		sd=mindiff#maxdiff#(mindiff+maxdiff)/2
		);
y2=y2*(1/max(y2))
polygon(c(usermin,dom2,usermax),c(0,y2,0),col="gray");

squir<- function(i){
  if (usermax<x["Min",i] || x["Max",i]<usermin){
    return(0)
  } else {
    v<-x["Min",i]-usermean
    b<-x["Max",i]-usermean
    if (v<=0 && 0<=b){
      return(round(max(y),3))
    } else {
      z<-usermean+min(abs(v),abs(b))
      return(round(y[which.min(x=abs(imagedomain-z))],3))
    }
  }
}

par(mfrow=c(1,1))
p<-.75
axis(1,at=NULL,pos=p);
p=p-.2
step<-(ymark/(length(x)))*.9;
for ( i in 1:length(x)){
  lines(c(x["Min",i],x["Max",i]),c(p-i*step,p-i*step),type="o");
  text(x=x["Max",i],y=p-i*step,paste(colnames(x)[i],squir(i),sep=" - "),pos=4)
}

dev.off();

