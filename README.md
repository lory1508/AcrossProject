# AcrossProject
 Progetto colloquio Across


Buongiorno, in questo documento spiego brevemente come ho implementato il progetto richiesto.

Branch main: Implementazione delle specifiche indicate per lo step 1
Branch step2: Implementazione delle specifiche indicate per lo step 2

Interpretazione delle specifiche:
Step1:
	-� ammessa una sola parola alla volta, niente spazi o token per suddividere l'input
	-Non sono ammesse stringhe vuote
	-L'input pu� essere solo alfanumerico, niente caratteri speciali
	-L'applicazione non � case sensitive
	-L'obiettivo del programma � verificare che la parola digitata sia palindroma 
	
Step2:
	-Sono ammesse fino a un massimo di 3 parole alla volta, separate da 2 token, non consecutivi
	-Non sono ammesse stringhe vuote
	-L'input pu� contenere caratteri speciali
	-L'applicazione non � case sensitive
	-Non possono essere presenti pi� di 2 token nella stringa di input
	-L'obiettivo del programma � verificare che la stringa digitata contenga un massimo di 3 parole e per ognuna verr� controllato se � palindroma
	


Test eseguiti:
#Step1
input							output
esose							[07/02/2022] evviva, la parola <esose> � palindroma
159878951						[07/02/2022] evviva, la parola <159878951> � palindroma
159@951							[07/02/2022] ERRORE, parola inserita: 159@951
po-op							[07/02/2022] ERRORE, parola inserita: po-op
osso anna poi					[07/02/2022] ERRORE, parola inserita: osso anna poi
paospoa							[07/02/2022] paospoa non � palindroma


#Step2
input								output
osso								[07/02/2022] evviva, la parola <osso> � palindroma
poiuyt345 							[07/02/2022] poiuyt345 non � palindroma
qpalapq								[07/02/2022] evviva, la parola <qpalapq> � palindroma
123454321							[07/02/2022] evviva, la parola <123454321> � palindroma
nonpal 								[07/02/2022] nonpal non � palindroma
no@@valido							[07/02/2022] ERRORE, parola inserita: no@@valido
<+-*/*-+>							[07/02/2022] evviva, la parola <+-*/*-+> � palindroma
lplplplp@osso@alpla					una riga in log per ogni parola [lplplplp; osso; alpla]
									[07/02/2022] lplplplp non � palindroma
									[07/02/2022] evviva, la parola <osso> � palindroma
									[07/02/2022] evviva, la parola <alpla> � palindroma
0987890@QwertrEwq@klklklkl@wertrew 	[07/02/2022] ERRORE, parola inserita: 0987890@QwertrEwq@klklklkl@wertrew