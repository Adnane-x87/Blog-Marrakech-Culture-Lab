# Report – Marrakech: Cultural and Artistic Events

## Subject
How to present Marrakech's cultural and artistic events in a dynamic and collaborative way?

## Identify the Primary User

## Persona 1: Yasmine, the Cultural Explorer

### Age/Context
- Age: 28 years old
- Occupation: Freelance graphic designer living in Marrakech
- Lifestyle: Active in the local creative scene, attends 2-3 cultural events per month
- Tech usage: Uses smartphone primarily (android), checks social media and event platforms daily during commute and coffee breaks

### Main Objective
Discover upcoming cultural and artistic events in Marrakech quickly and decide which ones to attend based on community recommendations and her interests.

### Key Needs (3 max)
- **Browse current and upcoming events easily** – See what's happening this week/month in Marrakech's cultural scene (exhibitions, concerts, theater, workshops) without having to check multiple sources.
- **Filter by interest and date** – Quickly find events that match her interests (contemporary art, music, photography) and fit her schedule.
- **See community engagement** – Know which events are popular or recommended by other culture enthusiasts to help her decide what's worth attending.

### Main Frustration
"Information is scattered everywhere!" – Event details are spread across multiple Facebook pages, Instagram accounts, and different websites. She often discovers interesting events too late or misses them entirely because there's no centralized, updated platform.

### Environment
- Device: Primarily mobile android, occasionally checks on laptop
- Connection: Good WiFi at home/cafés, 4G when moving around the city
- Usage pattern: Quick 5-10 minute browsing sessions during breaks, searching for "what to do this weekend"

## Persona 2: Karim, the Event Organizer

### Age/Context
- Age: 35 years old
- Occupation: Cultural event organizer & manager of a small art gallery in Gueliz
- Lifestyle: Organizes 4-6 events per year (exhibitions, artist talks, workshops), collaborates with local artists and venues
- Tech usage: Uses laptop for work, smartphone for quick updates, active on social media for promotion

### Main Objective
Promote his cultural events to the right audience in Marrakech and increase visibility and attendance without spending too much time or money on marketing.

### Key Needs (3 max)
- **Easy event publication** – Quickly post event details (date, location, description, images) to reach the cultural community in one place.
- **Reach the right audience** – Connect with people genuinely interested in art and culture in Marrakech, not just random followers.
- **Track engagement** – See how many people are interested, planning to attend, or sharing his events to measure impact.

### Main Frustration
"Promoting events takes too much effort for too little reach!" – He has to post on multiple platforms (Facebook, Instagram, WhatsApp groups), pay for ads, and still struggles to reach beyond his existing network. Small cultural events get lost in the noise.

### Environment
- Device: Laptop for creating events, smartphone for quick responses and updates
- Connection: Good WiFi at gallery/home
- Usage pattern: Posts events 2-3 weeks in advance, checks engagement daily, responds to inquiries

# Persona 3: Sofia, the Platform Administrator

##  Age/Context
- **Age:** 32 years old
- **Occupation:** Digital project manager working with the Marrakech Cultural Office
- **Lifestyle:** Responsible for maintaining the quality and credibility of the platform, works regular office hours
- **Tech usage:** Desktop computer at office, tablet at home, comfortable with admin dashboards and content management systems

##  Main Objective
Ensure the platform maintains high-quality, verified cultural content and provides a trustworthy experience for both event organizers and visitors.

##  Key Needs (3 max)
1. **Moderate content efficiently** – Review and approve/reject submitted events quickly to ensure only legitimate cultural events are published.
2. **Manage user accounts** – Handle organizer registrations, verify credentials, and manage user roles and permissions easily.
3. **Monitor platform activity** – Get quick insights on platform usage (number of events, active users, popular categories) to report to stakeholders.

##  Main Frustration
**"Manual verification is overwhelming and time-consuming!"** – She has to check every event submission manually, verify organizers' credentials separately, and often gets overwhelmed during peak cultural seasons (festivals, Ramadan cultural nights) when multiple events are submitted daily.

##  Environment
- **Device:** Desktop at office (primary), tablet for evening checks
- **Connection:** Stable office internet
- **Usage pattern:** Checks submissions 2-3 times daily, weekly reporting, responds to organizer requests within 24 hours

## Problem
How can we centralize Marrakech’s cultural events to make discovery easier for visitors and promotion more efficient for local organizers?

## Problem Statements
For Yasmine, who struggles to find accurate and up-to-date information about cultural and artistic events in Marrakech,
we want to create a centralized and dynamic platform that gathers all event information in one place,
so that she can quickly discover what’s happening and participate more in the city’s cultural life.

For the Event Organizer (Karim):
For Karim, who spends too much time promoting his events on multiple platforms with little reach,
we want to offer an online space where he can publish, manage, and track his events efficiently,
so that he can reach a larger cultural audience and boost participation with less effort.

## Proposed Solution

- A mobile-first web platform that displays upcoming and ongoing events by date and category.
-  Smart filters to search by interest, date, and popularity.
- Simple event creation form with title, description, date, location, and images.
- Automatic formatting: generate a professional event card automatically from the form.

## Use Case Diagram

```plantum

@startuml
left to right direction
skinparam packageStyle rectangle

actor "Yasmine\n(Visitor)" as Yasmine
actor "Karim\n(Editor)" as Karim
actor "Sofia\n(Admin)" as Sofia

rectangle "Marrakech Cultural Events Platform" {

  ' Yasmine's Use Cases
  usecase "Browse Events" as UC1
  usecase "Filter Events\n(by category & date)" as UC2
  usecase "View Event Details" as UC3
  usecase "See Event Popularity" as UC4

  ' Karim's Use Cases
  usecase "Create/Publish Event" as UC7
  usecase "Manage Events" as UC9

  ' Sofia's Use Cases
  usecase "Manage published articles" as UC10
  usecase "Approve / Reject posts" as UC11
}

' Connections for Yasmine
Yasmine --> UC1
Yasmine --> UC2
Yasmine --> UC3
Yasmine --> UC4

' Connections for Karim
Karim --> UC7
Karim --> UC9

' Connections for Sofia
Sofia --> UC10
Sofia --> UC11

' Relationships between use cases
UC2 ..> UC1 : <<extends>>
UC3 ..> UC1 : <<extends>>
@enduml



