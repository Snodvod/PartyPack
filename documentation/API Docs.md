# API Endpoints
##	Users
- GET /users				    All users
- GET /users/{id}			    Get 1 user
- GET /users/occupations/{id}	Get 1 user’s occupations
- GET /users/type/{id}			Get 1 user’s type
- GET /users/events/{id}		Get 1 user’s events (artist or client)


## Types (roles)
- GET /types				All types
- GET /types/users{id}		Get 1 type’s users

## Occupations (artist professions)
- GET /occupations			All occupations
- GET /occupations/{id}		Get 1 occupation
- GET /occupations/users/{id}	Get users who have the same occupation

## Events
- GET /events				    All events
- GET /events/{id}			    Get 1 event
- GET /events/comments/{id}		Get 1 event’s comments
- POST /events                  Create a new event
- POST /users/comments/{id}     Store a new comment on 1 event

## Parties (concepts)
- GET /parties				All party concepts
- GET /parties/{id}			Get 1 party concept
- POST /parties             Create a new party