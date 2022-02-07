# AcrossProject
 Progetto colloquio Across


Buongiorno, in questo documento spiego brevemente come ho implementato il progetto richiesto.

Branch main: Implementazione delle specifiche indicate per lo step 1
Branch step2: Implementazione delle specifiche indicate per lo step 2

Interpretazione delle specifiche:
Step1:
	-È ammessa una sola parola alla volta, niente spazi o token per suddividere l'input
	-Non sono ammesse stringhe vuote
	-L'input può essere solo alfanumerico, niente caratteri speciali
	-L'applicazione non è case sensitive
	-L'obiettivo del programma è verificare che la parola digitata sia palindroma 
	
Step2:
	-Sono ammesse fino a un massimo di 3 parole alla volta, separate da 2 token, non consecutivi
	-Non sono ammesse stringhe vuote
	-L'input può contenere caratteri speciali
	-L'applicazione non è case sensitive
	-Non possono essere presenti più di 2 token nella stringa di input
	-L'obiettivo del programma è verificare che la stringa digitata contenga un massimo di 3 parole e per ognuna verrà controllato se è palindroma
	


Test eseguiti:
#Step1
input							output
esose							[07/02/2022] evviva, la parola <esose> è palindroma
159878951						[07/02/2022] evviva, la parola <159878951> è palindroma
159@951							[07/02/2022] ERRORE, parola inserita: 159@951
po-op							[07/02/2022] ERRORE, parola inserita: po-op
osso anna poi					[07/02/2022] ERRORE, parola inserita: osso anna poi
paospoa							[07/02/2022] paospoa non è palindroma


#Step2
input								output
osso								[07/02/2022] evviva, la parola <osso> è palindroma
poiuyt345 							[07/02/2022] poiuyt345 non è palindroma
qpalapq								[07/02/2022] evviva, la parola <qpalapq> è palindroma
123454321							[07/02/2022] evviva, la parola <123454321> è palindroma
nonpal 								[07/02/2022] nonpal non è palindroma
no@@valido							[07/02/2022] ERRORE, parola inserita: no@@valido
<+-*/*-+>							[07/02/2022] evviva, la parola <+-*/*-+> è palindroma
lplplplp@osso@alpla					una riga in log per ogni parola [lplplplp; osso; alpla]
									[07/02/2022] lplplplp non è palindroma
									[07/02/2022] evviva, la parola <osso> è palindroma
									[07/02/2022] evviva, la parola <alpla> è palindroma
0987890@QwertrEwq@klklklkl@wertrew 	[07/02/2022] ERRORE, parola inserita: 0987890@QwertrEwq@klklklkl@wertrew