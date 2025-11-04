## 🎯 1. Project Context
 Collaborative blog dedicated to Marrakech's cultural and artistic events. Objective: Centralize local cultural information, facilitate event discovery for visitors, and simplify promotion for organizers, in order to energize the city's cultural ecosystem and strengthen community engagement around arts and culture.


 ## 🎨  2. Style & Design

 - Modern, clean style with cultural/artistic inspiration 🎭
 - Custom color palette: terracotta orange (#E07856), ochre yellow (#D4A574), deep indigo (#2C3E7C), cream white (#F5F5DC)Full-width layout, readable, minimal unnecessary scrolling
 - Magazine-style cultural blog / lifestyle aesthetic
 - Framework: Bootstrap 5 + smooth animations

 ##  🧱  3. Pages to be planned

### Admin section:

- Manage events (CRUD)
- Approve/Reject submissions

### Public section:
- Home
- Events 
- Event Page (details)

## 📌  4. Main sections
 - Header + navigation menu
- Hero section with Marrakech image
- Event list (card grid layout)
- Footer (links + social media)


## 🧑‍🤝‍🧑 5. User Experience

- Fully responsive (mobile / tablet / desktop)
- Clear and intuitive navigation
- Event detail page 
- Quick filter functionality

## ⚙️ 6. Technologies

- HTML + Bootstrap 5
- icônes FontAwesome
- CSS (colors only)
- One-page mockup for each view

## ✍️ 7. Expected Deliverables
- Fully functional HTML + CSS code
- Responsive design (mobile, tablet, desktop)
- File organization: Each page as standalone HTML file with its own CSS stylesheet
- Clean and documented code structure

## ✅ Required Work

👉 Deliver the site map → Complete list of pages including: page title + short description of purpose (no detailed content needed at this stage)

## 📊 Use Case Diagram

```plantuml

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

```

## 🗂️ Site Map — Blog "Marrakech Cultural Scene"

### 🎭 Public Area

| Page | Description |
|------|-------------|
| **Home** | Landing page with hero banner, featured events, and latest cultural highlights |
| **Events / Blog** | Grid display of events (thumbnail, title, date, category tags) |
| **Event Details** | Individual event page: full information, organizer details, images, engagement section |
| **Category Page** | Events filtered by type (exhibitions, concerts, theater, workshops...) |
| **About** | Platform mission, cultural vision, community goals |
| **Submit Event** | Simple form for organizers: event name, date, location, description, image upload |

### 🔐 Admin / Editor Area

| Page | Description |
|------|-------------|
| **Admin Dashboard** | Overview: pending submissions, published events, statistics |
| **Events List** | Table view of all events (title, date, status, organizer, actions) |
| **Approve Event** | Review and approve/reject submitted events |
| **Delete Event** | Remove event with confirmation prompt |

### 🛠️ Key Features

✅ CRUD operations for events (Admin/Editor)  
✅ Event display with images and filters  
✅ Event page with community engagement  
✅ Fully responsive design  
✅ Modern cultural aesthetic with Marrakech-inspired colors

 