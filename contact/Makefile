DB=mariadb

up:
	./vendor/bin/sail up -d
down:
	./vendor/bin/sail down
ps:
	./vendor/bin/sail ps
ps-a:
	docker ps -a
build:
	./vendor/bin/sail build
build-nc:
	./vendor/bin/sail build --no-cache
shell:
	./vendor/bin/sail shell
root-shell:
	./vendor/bin/sail root-shell
db:
	docker exec -it $(DB) /bin/bash
	#docker exec -it $(DB) /bin/ash
info:
	./vendor/bin/sail system info
df:
	./vendor/bin/sail system df
clean:
	./vendor/bin/sail builder prune
