# Gadai Startech - Web Application

**Gadai Startech** is a web-based application developed using **Laravel** for a pawnshop company.  
This system provides comprehensive information related to the company's services, including office locations, pawn simulation, procedures, and other relevant details to help customers easily access and understand the pawn process.  

---

## ✨ Features
- Company profile & branch office information  
- **Pawn Simulation**: calculate estimated loan values based on collateral  
- **How to Pawn**: step-by-step guide for customers  
- Services information (loan terms, conditions, interest rates)  
- Contact page with integrated form for customer inquiries  
- Responsive design for both desktop and mobile devices  

---

## 🛠️ Tech Stack
- **Framework**: Laravel  
- **Frontend**: Blade Templates, Bootstrap/Tailwind CSS  
- **Database**: MySQL  
- **Authentication**: Laravel Breeze / Laravel Auth (if enabled)  
- **Other Tools**: Composer, Artisan CLI  

---

## 🚀 Installation & Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/gadai-startech.git
   cd gadai-startech
2. Install dependencies:
    ```bash
    composer install
    npm install && npm run dev
3. Configure environment variables:
    ```bash
    cp .env.example .env
    php artisan key:generate

Update database settings in .env
    
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=gadai_startech
    DB_USERNAME=root
    DB_PASSWORD=yourpassword

4. Run migrations and seeders (if available):
    ```bash
    php artisan migrate --seed

5. Start local development server:
    ```bash
    php artisan serve

6. Access the application in your browser:
    ```bash
    http://localhost:8000
    


📂 Project Structure

    app/
    ├── Http/
    ├── Models/
    ├── Controllers/
    resources/
    ├── views/
    └── css, js
    routes/
    └── web.php
    database/
    └── migrations/

📌 Future Improvements
- Online pawn application with digital form submission
- Admin dashboard for managing branch data and simulations
- Customer account system for transaction history
- Integration with payment gateways

🤝 Contributing

Contributions are welcome! Feel free to fork this repository, open an issue, or submit a pull request for improvements or new features.