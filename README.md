# 📂 Project Tracker

A simple project and task management system built with **Laravel 12 (MVC)** and **Vite**.

---

## 🚀 Features

* Create and manage **projects**
* Create **tasks** under each project
* Assign tasks to multiple **users**
* Set **deadlines** for tasks
* Admin can **create**, **update**, and **delete** users
* Clean UI with [Tabler](https://tabler.io) admin template and rich text editor using TinyMCE

---

## ⚙️ Tech Stack

* **Backend**: Laravel 12
* **Frontend**: Blade templates with Vite & Tabler UI
* **Editor**: TinyMCE for rich-text task descriptions
* **Database**: MySQL or PostgreSQL

---

## 🔧 Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/goraasep/digimos-project-tracker.git
   cd project-tracker
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Install Node.js dependencies**

   ```bash
   npm install && npm run dev
   ```

4. **Environment setup**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure `.env`** with your DB credentials

6. **Run migrations and optional seeders**

   ```bash
   php artisan migrate --seed
   ```

7. **Start development server**

   ```bash
   php artisan serve
   ```

---

## 👥 User Roles

* **Admin**

  * Manage users
  * Manage all projects and tasks
* **User**

  * Cannot manage users
  * Manage all projects and tasks

---

## 📅 Task Structure

Each task belongs to a project and contains:

* Title and rich-text **description**
* **Deadline** (with color indicators based on urgency)
* **Status**: `TODO`, `IN_PROGRESS`, `ON_HOLD`, `COMPLETED`
* Assigned to one or more users

---
