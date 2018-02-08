all: build

tag ?= latest
.PHONY: build
build:
	docker build -t mvdstam/apache-rolling-update:$(tag) webimage


