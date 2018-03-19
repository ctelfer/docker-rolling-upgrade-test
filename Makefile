all: build

tag ?= latest
.PHONY: build
build:
	docker build -t ctelfer/apache-rolling-update:$(tag) webimage


