## 2025-04-12

Exploring alongside video: https://www.youtube.com/watch?v=LqVo5dasBh0

- We start a simple Chat with RAG system
- It's still non-functional, as it's not ingesting the PDF, and that's what we will start with on the next stream.

## 2025-04-09

Add N8N integration and test trigger functionality
The integration enables Laravel to communicate with N8N workflows through a webhook endpoint for book reading events.

This commit:
- Creates initial CHANGELOG.md documenting project setup and N8N integration
- Adds README.md with setup instructions and live stream development logs
- Implements TestTriggerBookReads command to manually test N8N workflow
- Configures N8N service in docker-compose.yml with appropriate settings
- Adds N8N base URL configuration to services.php
- Creates a simple run script for project tasks
