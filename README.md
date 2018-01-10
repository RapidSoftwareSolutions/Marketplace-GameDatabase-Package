[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GameDatabase/functions?utm_source=RapidAPIGitHub_GameDatabaseFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GameDatabase Package
IGDB.com is a video game community website, intended for both game consumers and video game professionals alike.
* Domain: [GameDatabase](http://igdb.github.io)
* Credentials: userKey, requestUrl

## How to get credentials: 
0. Browse to [IGDB](https://igdb.github.io/api)
1. Register or log in
2. Browse to [Admin page](https://api.igdb.com/admin) to get your userKey and requestUrl



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## GameDatabase.listCharacters
Get list of characters

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getCharacters
Get characters information

| Field       | Type       | Description
|-------------|------------|----------
| requestUrl  | credentials| Your request url
| userKey     | credentials| Your user key
| characterIds| List       | Id of the character

## GameDatabase.listCollections
Get list of collections

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getCollections
Get collections information

| Field        | Type       | Description
|--------------|------------|----------
| requestUrl   | credentials| Your request url
| userKey      | credentials| Your user key
| collectionIds| List       | Id of the collection

## GameDatabase.listCompanies
Get list of companies

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getCompanies
Get companies information

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| companyIds| List       | Id of the companies

## GameDatabase.listCredits
Get list of employees responsible for working on the game.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getCredits
Get employees responsible for working on the game.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| creditsIds| List       | Id of the credit

## GameDatabase.listFeeds
Get list of social feed of status updates, media and news articles.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getFeeds
Get social feed of status updates, media and news articles.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| feedIds   | List       | Id of the feed

## GameDatabase.listFranchises
Get list video game franchises such as Star Wars.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getFranchises
Get video game franchises such as Star Wars.

| Field       | Type       | Description
|-------------|------------|----------
| requestUrl  | credentials| Your request url
| userKey     | credentials| Your user key
| franchiseIds| List       | Id of the franchise

## GameDatabase.listGames
Get list of Video Games!

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getGames
Get Video Games!

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| gameIds   | List       | Id of the game

## GameDatabase.listGameEngines
Get list of game engines such as unreal engine.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getGameEngines
Get game engines such as unreal engine.

| Field        | Type       | Description
|--------------|------------|----------
| requestUrl   | credentials| Your request url
| userKey      | credentials| Your user key
| gameEngineIds| List       | Id of the game engine

## GameDatabase.listGameModes
Get list of game modes

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getGameModes
Get game modes

| Field      | Type       | Description
|------------|------------|----------
| requestUrl | credentials| Your request url
| userKey    | credentials| Your user key
| gameModeIds| List       | Id of the game mode

## GameDatabase.listGenres
Get list of game genres

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getGenres
Get game genres

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| genreIds  | List       | Id of the genre

## GameDatabase.listKeywords
Get list of words or phrases that get tagged to a game such as “world war 2” or “steampunk”.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getKeywords
Get words or phrases that get tagged to a game such as “world war 2” or “steampunk”.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| keywordIds| List       | Id of the keyword

## GameDatabase.listPages
Get list of multipurpose pages currently used for youtubers and media organisations.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPages
Get pages currently used for youtubers and media organisations.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| pageIds   | List       | Id of the page

## GameDatabase.listPersons
Get list of individuals who are in the video games industry

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPersons
Get individuals who are in the video games industry

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| personIds | List       | Id of the person

## GameDatabase.listPlatforms
Get list of hardware used to run the game or game delivery network

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPlatforms
Get hardware used to run the game or game delivery network

| Field      | Type       | Description
|------------|------------|----------
| requestUrl | credentials| Your request url
| userKey    | credentials| Your user key
| platformIds| List       | Id of the platform

## GameDatabase.listPlayerPerspective
Get list player perspectives

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPlayerPerspectives
Get player perspectives

| Field               | Type       | Description
|---------------------|------------|----------
| requestUrl          | credentials| Your request url
| userKey             | credentials| Your user key
| playerPerspectiveIds| List       | Id of the player perspective

## GameDatabase.listPulses
Get list of news article.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPulses
Get news article.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| pulseIds  | List       | Id of the pulses

## GameDatabase.listPulseGroups
Get list of news article groups.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPulseGroups
Get news article groups.

| Field        | Type       | Description
|--------------|------------|----------
| requestUrl   | credentials| Your request url
| userKey      | credentials| Your user key
| pulseGroupIds| List       | Id of the pulse groups

## GameDatabase.listPulseSources
Get list of news article source such as IGN.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getPulseSources
Get news article source such as IGN.

| Field         | Type       | Description
|---------------|------------|----------
| requestUrl    | credentials| Your request url
| userKey       | credentials| Your user key
| pulseSourceIds| List       | Id of the pulse sources

## GameDatabase.listReleaseDates
Get list of release dates, platforms and versions.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getReleaseDates
Get release dates, platforms and versions.

| Field         | Type       | Description
|---------------|------------|----------
| requestUrl    | credentials| Your request url
| userKey       | credentials| Your user key
| releaseDateIds| List       | Id of the release dates

## GameDatabase.listReviews
Get list of reviews

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getReviews
Get reviews

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| reviewIds | List       | Id of the review

## GameDatabase.listThemes
Get list of themes

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getThemes
Get themes

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| themeIds  | List       | Id of the themes

## GameDatabase.listTitles
Get list of job titles in the industry.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getTitles
Get job titles in the industry.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| titleIds  | List       | Id of the title

## GameDatabase.listGameVersions
Get list of details about game editions and versions.

| Field     | Type       | Description
|-----------|------------|----------
| requestUrl| credentials| Your request url
| userKey   | credentials| Your user key
| fields    | List       | Fields to retrieve; * to return all fields
| limit     | Number     | Number of records to retrieve
| offset    | Number     | Offset of records to retrieve
| order     | String     | Sort order
| search    | String     | String to search

## GameDatabase.getGameVersions
Get details about game editions and versions.

| Field         | Type       | Description
|---------------|------------|----------
| requestUrl    | credentials| Your request url
| userKey       | credentials| Your user key
| gameVersionIds| List       | Id of the game version

