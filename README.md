# BOWO Widget catalogue

## Resume 

Liste complète des widgets (éléments visuels) utilisés dans l'application Bowo dénués de contexte.
Cette application présentera tous ces éléments visuels afin de discuter et développer le projet de manière uniforme avec le Designer.
Une documentation accompagnera chaque élément, ainsi qu'une activité Démo.


## Integration

```javascript
// module gradle
compile 'fr.bowo.widgetcatalog:library_bowowidgetcatalog:0.0.15'
```

# Documentation
---
## BOWOWeekPicker
---
### Add BOWOWeekPicker in your main layout

```xml
<fr.bowo.library_bowowidgetcatalog.BOWOWeekPicker
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:id="@+id/bowo_week_picker"/>
```

### Start BOWOWeekPicker

```java
BOWOWeekPicker bowoWeekPicker = (BOWOWeekPicker)findViewById(R.id.bowo_week_picker);
bowoWeekPicker.start(openingTimeOnDayList, daySelected, textOpenStatus,
                      selectionDayColor, openStatusFont, hourAndDayFont);
```

#### Avec :

Arraylist<OpeningTimeAndDate> **openingTimeOnDayList**

int  **daySelected**, le jour de la semaine selectionné initialement (0: lundi -> 6: dimanche)

String **textOpenStatus**, text affiché au dessus des bulles (ex: Actuellement ouvert)

String **selectionDayColor**, la couleur de fond des bulles en Hexa (ex: #FFFFFF)

String **openStatusFont**, la police d'ecriture du text ouvert / fermé (textOpenStatus)

String **hourAndDayFont**, la police d'ecriture des jours et des horraires


#### Class OpeningTimeAndDate

```java	
public static class OpeningTimeAndDate {
    public String day;
    public String openingTime;
    public int dayOfTheWeek; // 0 (mon) -> 6 (sun)

    public OpeningTimeAndDate(String day, String openingTime, int dayOfTheWeek) {
        this.day = day;
        this.openingTime = openingTime;
        this.dayOfTheWeek = dayOfTheWeek;
    }
}
```

String **day**, le text affiché dans une bulle (ex: lun, mar, mer, ...)

String **openingTime**, le text affiché en dessous de la bulle (ex: 08h00 - 10h00)
tous les 2 bulletpoints un retour à la ligne sera effectué à la place par la library

int **dayOfTheWeek**, le jour de la semaine corespondant (0: lundi -> 6: dimanche)


## Les methodes start
	public void start(ArrayList<OpeningTimeAndDate> openingTimeOnDayList, int daySelected, String textOpenStatus,
                      String selectionDayColor);
	public void start(ArrayList<OpeningTimeAndDate> openingTimeOnDayList, int daySelected, String textOpenStatus);
    public void start(ArrayList<OpeningTimeAndDate> openingTimeOnDayList, int daySelected, String textOpenStatus, String selectionDayColor);

	
## Autres methodes
Permet de modifier le nombre de bulles par ligne (par defaut 5) :

	public void setLimitOfTextInRow(int limitOfTextInRow);
	
Permet de modifier la police d'ecriture du text ouvert / fermé (textOpenStatus)

    public void setTimeStatutTypeFace(String font);
	
Permet de modifier la police d'ecriture des jours et des horraires

    public void setDaysTextViewsTypeFace(String font);
	
Permet de modifier le text du champ openStatus
	
    public void setOpenStatus(String openStatus);
	
Permet de modifier la couleur de texte de toutes les textView

    public void setColorTextViews(String color)

    
---
## BOWOCalendar
---
### Add BOWOCalendar in your main layout

```xml
<fr.bowo.library_bowowidgetcatalog.BOWOCalendar
        android:id="@+id/bowocalendar_view"
        android:layout_width="match_parent"
        android:layout_height="wrap_content" />
```

### Start BOWOCalendar

```java
BOWOCalendar cv = ((BOWOCalendar)findViewById(R.id.bowocalendar_view));
cv.start(Locale.France, dateMax, closedDayList, closedDayOfWeekList);
```

#### Avec :

Local **Locale.France**, langue dans laquel afficher le calendrier

Date **dateMax**, dernier jour de reservation possible (nullable -> dates affiché sur 1 an par defaut)

ArrayList<Date> **closedDayList**, liste de dates non disponnible (nullable)

ArrayList<Date> **closedDayOfWeekList**, liste de jours de la semaine non disponnible

## Les methodes start

    public void start(Locale locale);
    public void start(Locale locale, Date dateMax, ArrayList<Date> closedDayList);
	public void start(Locale local, @Nullable Date dateMax, @Nullable ArrayList<Date> closedUniqueDayList, ArrayList<Date> closedDayOfWeekList);

## Autres methodes

Permet de mettre à jour le calendrier et selectionner une date precise si non null (attention : à utiliser seulement apres un start();)

    void updateCalendar(Date selectedDay);
	
Permet de get la date selectionnée (null si aucune)
	
	Date getSelectedDate();

Permet d'executer une action lorsque l'utilisateur clique sur un jour disponible

    void setEventHandler(BOWOCalendarEventHandler eventHandler);
    
avec 

     public interface BOWOCalendarEventHandler {
        void onDayClick(Date date);
    }


---
## BOWOSolarIndicator
---
### Add BOWOSolarIndicator in your main layout

```xml
<fr.bowo.library_bowowidgetcatalog.BOWOSolarIndicator
        android:id="@+id/solar_indicator"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"/>
```

### Start BOWOSolarIndicator

```java
BOWOSolarIndicator solarIndicator = (BOWOSolarIndicator) findViewById(R.id.solar_indicator);
solarIndicator.startAnimation(startTime, endTime, displayPreAnimation);
```

#### Avec :

Long  **startTime**, temps en milliseconde du point/angle de début de l'animation.

Long **endTime**, temps en milliseconde du point/angle de fin de l'animation.

boolean **displayPreAnimation**, affichage ou non de la pre-animation : ```faire venir
l'indicateur du point de départ jusqu'à l'heure actuelle```; (true: pre-animation -> false: pas de pre-animation)

## Les methodes start

    public void startAnimation(long startTime, final long endTime, boolean displayPreAnimation);

## Autres methodes

 Version Programme | Version xml | Methode 
:-: | :-: | :-:
```void setStartAngle(int startAngle)``` | ```app:start_angle="180"``` | ```Permet de modifier l'angle de départ```
```void setEndAngle(int endAngle)``` | ```app:end_angle="360"``` | ```Permet de modifier l'angle de fin```
```void setStartAngle(int startAngle)``` | ```app:start_angle="180"``` | ```Permet de modifier l'angle de départ```
```void setStartAngle(int startAngle)``` | ```app:start_angle="180"``` | ```Permet de modifier l'angle de départ```
```void setStartAngle(int startAngle)``` | ```app:start_angle="180"``` | ```Permet de modifier l'angle de départ```
```void setStartAngle(int startAngle)``` | ```app:start_angle="180"``` | ```Permet de modifier l'angle de départ```
```void setStartAngle(int startAngle)``` | ```app:start_angle="180"``` | ```Permet de modifier l'angle de départ```
