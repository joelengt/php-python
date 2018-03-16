# Project variables
PROJECT_NAME ?= service-api-gateway
ORG_NAME ?= api-gateway
REPO_NAME ?= api-gateway

# Filenames
DEV_COMPOSE_FILE := ./docker-compose.yml

COVERAGE_SERVER_PORT := 2323

.PHONY: test build release clean

start:
	${INFO} "Pulling latest images..."
	@ docker-compose -f $(DEV_COMPOSE_FILE) up

dev:
	${INFO} "Building images..."
	@ docker-compose -f $(DEV_COMPOSE_FILE) build

	${INFO} "Running server..."
	@ docker-compose -f $(DEV_COMPOSE_FILE) up

up:
	${INFO} "Pulling latest images..."
	@ docker-compose -f $(DEV_COMPOSE_FILE) pull

# Cosmetics
YELLOW := "\e[1;33m"
NC := "\e[0m"

# Shell Functions
INFO := @bash -c '\
  printf $(YELLOW); \
  echo "=> $$1"; \
  printf $(NC)' SOME_VALUE
