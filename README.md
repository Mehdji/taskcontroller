# 🚀 My Symfony Task Manager 🚀

A simple task manager developed with Symfony for learning purposes.

## 🌟 Introduction

Hello! 👋 I'm a BTS SIO SLAM student, and this project is my first foray into Symfony development. The goal was to learn the framework's core concepts by building a practical application: a task manager.

This project allows users to:

* ➕ Create new tasks
* 📝 Edit existing tasks
* ✅ Mark tasks as completed
* 🗑️ Delete tasks

## ✨ Features

* **Task Management:** Core functionality to add, edit, delete, and mark tasks.
* **Symfony Components:** Utilizes various Symfony components like:
    * Twig: For templating
    * Doctrine: For database interaction (ORM)
    * Form: For handling forms
    * Routing: For managing URLs
* **Basic User Interface:** A simple and intuitive interface to interact with tasks.
* **Database Persistence:** Tasks are stored and retrieved from a database.

## 🛠️ Technologies Used

* **PHP:** The server-side scripting language
* **Symfony:** The PHP framework
* **Twig:** The templating engine for Symfony
* **Doctrine ORM:** The Object-Relational Mapper for database interaction
* **HTML/CSS:** For the basic structure and styling of the web pages
* **Database:** (Specify the database you used, e.g., MySQL, PostgreSQL, SQLite)

## ⚙️ Installation

1.  **Clone the repository:**

    ```bash
    git clone <repository_url>
    ```

2.  **Navigate to the project directory:**

    ```bash
    cd <project_directory>
    ```

3.  **Install Composer dependencies:**

    ```bash
    composer install
    ```

4.  **Configure the database connection:**

    * Copy the `.env` file to `.env.local`
    * Edit the `.env.local` file to set your database credentials (e.g., `DATABASE_URL`)

5.  **Create the database:**

    ```bash
    php bin/console doctrine:database:create
    ```

6.  **Run the database migrations:**

    ```bash
    php bin/console doctrine:migrations:migrate
    ```

7.  **Start the Symfony development server:**

    ```bash
    symfony serve
    ```

8.  **Open your browser** and navigate to the provided URL (usually `http://127.0.0.1:8000`).

## 🚀 Usage

* Once the application is running, you can create, edit, delete, and mark tasks using the provided interface.

## 📚 Learning Resources

This project was developed using the following resources:

* [Symfony Documentation](https://symfony.com/doc/current/index.html)
* Online tutorials and courses (mention any specific resources you found helpful)

## 🤝 Contributing

As this is a learning project, I'm not actively seeking contributions at this time. However, feel free to fork the repository and use it as a starting point for your own Symfony projects!

## 📄 License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).

## 🧑‍💻 Author

[Your Name]

## 📧 Contact

[Your Email Address (Optional)]

## 🙏 Acknowledgements

* I would like to thank my teachers and classmates for their support.

## 📝 To-Do (Future Improvements)

* Add user authentication and authorization.
* Implement task priorities and due dates.
* Improve the user interface with a CSS framework (e.g., Bootstrap, Tailwind CSS).
* Add unit and functional tests.
* Implement more advanced features (e.g., task categories, search functionality).

## 🎉 Conclusion

This task manager is a simple but effective example of what can be built with Symfony. I hope it helps others who are learning Symfony as well! Happy coding! 🚀